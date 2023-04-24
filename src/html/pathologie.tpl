<link rel="stylesheet" href="css/pathologie.less"></link>
<div class="pathologie_container">
    <div class="result_page_content_item_title">
        <a>id:{$pathoidp}</a>
    </div>
    <div class="pathologie_desc">
        <p><b>Patologie:</b> {$pathodesc}</p>
        <p><i><b>type:</b> {$pathotype}</i></p>
        <p><b>Meridien:</b> {$mername}</p>
        <p><b>Symptomes:</b> {implode(",",array_unique(explode(",",$symptomes)))}</p>
    </div>
</div>