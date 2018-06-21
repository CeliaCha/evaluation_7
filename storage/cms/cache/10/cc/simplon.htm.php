<?php 
class Cms5b2bb9461157c701581692_0135feede86549dfa3979c51cd08bf10Class extends Cms\Classes\PageCode
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
