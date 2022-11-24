<?php


$rawdata=simplexml_load_file("http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml") or die("Error: Cannot create object");
if(!$rawdata){
    echo 'Fail to load XML file';
    die;
}
?>

<table>
    <tbody>
        <tr>
            <td>Origin</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->origin?></td>
        </tr>
        <tr>
            <td>Pubdate</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->pubdate?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->title?></td>
        </tr>
        <tr>
            <td>Geoform</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->geoform?></td>
        </tr>
        <tr>
            <td>Geoform</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->geoform?></td>
        </tr>
        <tr>
            <td>Othercit</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->othercit?></td>
        </tr>

        <tr>
            <td>Onlink</td>
            <td><?=$rawdata->idinfo->citation->citeinfo->onlink?></td>
        </tr>
    </tbody>
</table>