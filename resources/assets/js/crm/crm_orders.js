
$(document).ready(function(){
/*
 *switch between dishes' tabs
 */
    var activeLi = $("#crm_dishes .nav-tabs li:first");
    var activeType = $("#crm_dishes .dishes div:first").attr('type');
    var activeDivs = $("#crm_dishes .dishes div[type="+activeType+"]");
    activeDivs.show();
    activeLi.addClass('active');


    $("#crm_dishes .nav-tabs li").click(function(){
        $(this).addClass('active');
        activeLi.removeClass('active');
        $("#crm_dishes .dishes div[type="+activeType+"]").hide();
        activeLi=$(this);

        activeType = $(this).children()[0].innerHTML;
        activeDivs = $("#crm_dishes .dishes div[type="+activeType+"]");
        $("#crm_dishes .dishes div[type="+activeType+"]").show();
    });

    /*
     *  add to shopping cart on click
     */



    $("#crm_dishes .dishes button").click(function(){
        var dishName = $(this).text();
        var reDishName = dishNameRe($(this).text());
        var dishNameLi =  $("#crm_cart ul").find("li").filter(function(i){
            if($(this).attr("name")){
                var re = new RegExp(reDishName);
                return $(this).attr("name").match(re);
            }
        });

        var dishPrice = $(this).attr('price');
        var dishId = $(this).attr('dishId');
        if(dishNameLi.length){
            //add 1 to qty for exist item
            var itemQuality = parseInt(dishNameLi.find("input").val());
            itemQuality += 1;
            dishNameLi.find("input").val(itemQuality);
        }
        else{
            //add new item to cart

            $("#crm_cart ul").prepend(generateListGroupItem(dishName, dishPrice, dishId));
            //$("#crm_cart .shopping-item input").attr('disabled', 'disabled');
            $("#crm_cart .shopping-item input").blur(function(){
                validateItemQty($(this));
                calculateTotalPrice();
            });
        }

        calculateTotalPrice();
    });



    /*
     *  clear shopping cart
     */

    $("#crm_cart .cart .clear_cart").click(function(){
        if(confirm("确定要清空购物车吗？"))
        {
            $("#crm_cart .cart ul li").not($("#crm_cart .cart ul li:last")).each(function(){
                $(this).remove();
            });
            $("#crm_cart .cart ul li:last").find('.total-price').text('    ' + 0 + ' 元');
        }
    });

    /*
     *  delete single item in cart
     */
    $("#crm_cart .cart ul").on("click", ".cart_delete_item", function(){
        //if(confirm("您确定从购物车中删除"+$(this).parent().attr("name")+"吗?"))
        //{
            var totalPrice = parseInt($(this).parent().parent().find("li:last").find('.total-price').text().slice(2));
            var itemQty = parseInt($(this).parent().find('input').val());
            var itemSinglePrice = parseInt($(this).parent().find('.price').text().slice(2));
            var itemTotalPrice = itemQty*itemSinglePrice;
            totalPrice -= itemTotalPrice;
            if(totalPrice>0){
                $("#crm_cart .cart ul li:last").find('.total-price').text('    ' + totalPrice + ' 元');
            }
            else
            {
                $("#crm_cart .cart ul li:last").find('.total-price').text('    ' + 0 + ' 元');
            }
            $(this).parent().remove();
        //}
    });

    /*
     *  plus & minus function
     */
    $("#crm_cart .cart ul").on('click', '.qty-minus', function(){
        modifyItemNumber($(this), 1, '-');
    });


    $("#crm_cart .cart ul").on('click', '.qty-plus', function(){
        modifyItemNumber($(this), 1, '+');
    });

    /*
     *  pagination
     */
    //move pagination
    $("#crm_dishes .pagination li:first").click(function(){
        movePagination(-5);
    });
    $("#crm_dishes .pagination li:last").click(function(){
        movePagination(5);
    });


    //make sure display only 24 items per page
    var numOfDisplayed = 24
    dishesInPage(1,numOfDisplayed);




    //change page based on clicked page number
    $("#crm_dishes .pagination li:not(:first,:last)").click(function(){
        var pageNumber = parseInt($(this).find('a').text());
        if((pageNumber-1)*numOfDisplayed < activeDivs.find('button').length){
            setActivePage($(this));
            dishesInPage(numOfDisplayed*(pageNumber-1)+1, numOfDisplayed*pageNumber);
        }
    });

    //submit order
    $('#submit_frame .order_submit_btn').click(function(){
        var data = collectShoppingData();
        var token = $("#submit_frame input[name='_token']").val();
        var userId = $("#submit_frame .order_user_id").val();
        var obj = {'data': data, 'user_id': userId, '_token' : token};

        $.ajax({
            type:'post',
            url:'/crm/api/orders',
            data: obj,
            success: function(data){
                alert(data);
            },
        }).error(function(){
            alert('数据提交失败~');
        });

    });

    $('#submit_frame .submit_order_form').submit(function(){
        var data = collectShoppingData();
    });

    //collect data in shopping cart and return json format directedly used by php
    function collectShoppingData(){
        var data=[];
        $('#crm_cart .shopping-item:not(:last)').each(function(){
            var dishId = $(this).attr('dishId');
            var qty = $(this).find('input').val();
            if(parseInt(qty)<1){
                return true;
            }
            dish = {
                dishId: dishId,
                qty: qty,
            };
            data.push(dish);
        });
        return data;
    }







    /*
     *  helper functions
     */
    //remove other active button in pagination and set current one as active
    function setActivePage(pageSelector){
        $("#crm_dishes .pagination li").removeClass('active');
        pageSelector.addClass('active');
    }

    //display min~max th dishes
    function dishesInPage(min, max) {
        $("#crm_dishes .dishes .dish_frame").each(function () {
            $(this).children('div').each(function (i) {
                if (i>(max-1)||i<(min-1)) {
                    $(this).hide();
                }
                else{
                    $(this).show();
                }
            });
        });
    }

    //add all page number + num
    function movePagination(num){
        $("#crm_dishes .pagination li:not(:first,:last) a").each(function(i){
            if(parseInt($(this).text())+num>0){
                $(this).text(parseInt($(this).text())+num);
            }
        });
    }

    //modify item number as required and modify total price accordingly
    function modifyItemNumber(btnObj, qty, op){
        var itemQty = parseInt(btnObj.parent().find('input').val());
        itemQty = op=='+'?(itemQty+qty):(itemQty-qty);
        btnObj.parent().find('input').val(itemQty);
        validateItemQty(btnObj.parent().find('input'));
        calculateTotalPrice();
    }
    //generate list group item html
    function generateListGroupItem(name, price, id) {
        return '<li class="list-group-item shopping-item" name='+ name +' dishId='+id+'>\
                <span>' + name + '</span>\
                <div class="price">&nbsp;&times;&nbsp;' + price + '</div>\
                <div class="amount">\
                    <a class="qty-minus" href="javascript:void(0);">-</a>\
                    <input type="text" class="qty" name="quality" value="1">\
                    <a class="qty-plus" href="javascript:void(0);">+</a>\
                </div>\
                <a class="cart_delete_item" href="javascript:void(0)"><span class="glyphicon glyphicon-remove-circle"></span></a>\
            </li>';
    }

    //format dishName and deal with special character
    function dishNameRe(name){
        //for parenthesis
        name = name.replace(/([()[{*+.$^\|?])/g, '\\$1');
        //select exact
        name = '^' + name + '$';
        return name;
    }

    //calculate and reset total price
    function calculateTotalPrice() {
        var total = 0;
        var items = $("#crm_cart ul li");
        items.each(function () {
            var singlePrice = parseInt($(this).find('.price').text().trim().slice(2)) || 0;
            var amount = parseInt($(this).find('input').val()) || 0;
            total += singlePrice * amount;
        })
        items.find('.total-price').text('    ' + total + ' 元');
    }

    //make sure item quality >= 0
    function validateItemQty(obj) {
        if (parseInt(obj.val()) < 0||isNaN(obj.val())) {
            obj.val('0');
        }
    }
});