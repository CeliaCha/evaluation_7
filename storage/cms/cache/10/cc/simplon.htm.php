<?php 
class Cms5b2b99a88cbab563943381_d2441cae88cd4541e3ed072b8d53040fClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $disabledplugins = storage_path('cms/disabled.json');
    $string = file_get_contents($disabledplugins);
    $json_array = json_decode($string, true);

    if (isset($json_array['Celia.Simplon'])) {
            return Redirect::to('/404');
    }
}
}
