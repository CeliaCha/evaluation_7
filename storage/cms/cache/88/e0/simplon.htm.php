<?php 
class Cms5b2b979ca23d2816185990_3706e723aac6a2bb67a2328be0ea93e4Class extends Cms\Classes\PageCode
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
