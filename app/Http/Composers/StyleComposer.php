<?php namespace App\Http\Composers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StyleComposer {

    public function compose(View $view)
    {
        /*
         * we can note just use method injection here
         * because the method has been called and passed in param or obj
         * just use Request::capture() to capture the request
         */


        $request = Request::capture();
        $pageName = $this->uriToFileName($request);
        $view->with('pageName', $pageName);
    }

    /**
     * @param $request
     * @return string
     */
    private function uriToFileName($request)
    {
        if ($request->segment(1) != '') {
            $pageName = '';
            foreach ($request->segments() as $partOfUri) {
                $pageName .= $partOfUri . '_';
            }
            $pageName = rtrim($pageName, '_');
            return $pageName;

        } else {
            $pageName = 'mainpage';
            return $pageName;
        }
    }
}
