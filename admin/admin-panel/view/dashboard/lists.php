<?php
/**
* TABLES CONFIGURATION
**/
?>
<div id="view-lists" class="anchor"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-default box-solid">
            <div class="box-header with-border">
                <i class="fa fa-list-alt"></i> <?php print $encodeExplorer->getString("lists"); ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6">
                    <p><strong><?php print $encodeExplorer->getString("default_list_view"); ?></strong></p>
                        <label class="radio-inline">
                            <input type="radio" name="list_view" value="grid" 
                            <?php
                            if ($setUp->getConfig('list_view') == 'grid') {
                                    echo "checked";
                            } ?>><i class="fa fa-th fa-fw"></i> 
                            <?php print $encodeExplorer->getString("grid"); ?>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="list_view" value="list" 
                            <?php
                            if ($setUp->getConfig('list_view') !== 'grid') {
                                    echo "checked";
                            } ?>><i class="fa fa-th-list fa-fw"></i> 
                            <?php print $encodeExplorer->getString("list"); ?>
                        </label>
                        <div class="checkbox checkbox-big">
                            <label>
                                <input type="checkbox" name="inline_thumbs" 
                                <?php
                                if ($setUp->getConfig('inline_thumbs')) {
                                    echo "checked";
                                } ?>><i class="fa fa-square fa-fw"></i>

                                <?php print $encodeExplorer->getString("inline_thumbs"); ?>
                            </label>
                        </div>
                        <div class="checkbox checkbox-big toggle">
                            <label>
                                <input type="checkbox" name="thumbnails" 
                                <?php
                                if ($setUp->getConfig('thumbnails')) {
                                    echo "checked";
                                } ?>><i class="fa fa-window-maximize fa-fw"></i>

                                <?php print $encodeExplorer->getString("can_thumb"); ?>
                            </label>
                        </div>
                        <div class="row toggled">
                            <div class="form-group col-xs-6">
                                <label><?php print $encodeExplorer->getString("thumb_w"); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="thumbnails_width" placeholder="760" 
                                    value="<?php print $setUp->getConfig('thumbnails_width'); ?>">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                            <div class="form-group col-xs-6">
                                <label><?php print $encodeExplorer->getString("thumb_h"); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="thumbnails_height" placeholder="800" 
                                    value="<?php print $setUp->getConfig('thumbnails_height'); ?>">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox checkbox-big">
                            <label>
                                <input type="checkbox" name="show_search" 
                                <?php
                                if ($setUp->getConfig('show_search')) {
                                        echo "checked";
                                } ?>><i class="fa fa-search fa-fw"></i> 
                                <?php print $encodeExplorer->getString("show_search"); ?>
                            </label>
                        </div>
                        <div class="checkbox checkbox-big">
                            <label>
                                <input type="checkbox" name="playmusic" 
                                <?php
                                if ($setUp->getConfig('playmusic') == true) {
                                    echo "checked";
                                } ?>><i class="fa fa-music fa-fw"></i> 
                                <?php print $encodeExplorer->getString("mp3_player"); ?>
                            </label>
                        </div>
                        <div class="checkbox checkbox-big">
                            <label>
                                <input type="checkbox" name="playvideo" 
                                <?php
                                if ($setUp->getConfig('playvideo') == true) {
                                    echo "checked";
                                } ?>><i class="fa fa-film fa-fw"></i> 
                                <?php print $encodeExplorer->getString("video_player"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="checkbox clear toggle checkbox-big">
                            <label>
                                <input type="checkbox" name="show_pagination" 
                                <?php
                                if ($setUp->getConfig('show_pagination')) {
                                        echo "checked";
                                } ?>> <i class="fa fa-angle-double-left"></i> 
                                        <i class="fa fa-angle-left"></i> 
                                        <i class="fa fa-angle-right"></i> 
                                        <i class="fa fa-angle-double-right"></i> 
                                <?php print $encodeExplorer->getString("show_pagination"); ?>
                            </label>
                        </div>
                        <div class="toggled">
                            <div class="checkbox clear checkbox-big">
                                <label>
                                    <input type="checkbox" name="show_pagination_num" 
                                    <?php
                                    if ($setUp->getConfig('show_pagination_num')) {
                                            echo "checked";
                                    } ?>><i class="fa fa-angle-double-left"></i>..2..<i class="fa fa-angle-double-right"></i>
                                    <?php print $encodeExplorer->getString("show_pagination_num"); ?>
                                </label>
                            </div>
                            <label class="radio-inline">
                                <input type="radio" name="filedefnum" 
                                <?php
                                if ($setUp->getConfig('filedefnum') == 10) {
                                    echo "checked";
                                } ?> value="10"> 10
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filedefnum" 
                                <?php
                                if ($setUp->getConfig('filedefnum') == 25) {
                                    echo "checked";
                                } ?> value="25"> 25
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filedefnum" 
                                <?php
                                if ($setUp->getConfig('filedefnum') == 50) {
                                    echo "checked";
                                } ?> value="50"> 50
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filedefnum" 
                                <?php
                                if ($setUp->getConfig('filedefnum') == 100) {
                                    echo "checked";
                                } ?> value="100"> 100
                            </label>
                        </div>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="filedeforder" 
                                <?php
                                if ($setUp->getConfig('filedeforder') == "alpha") {
                                    echo "checked";
                                } ?> value="alpha"> <i class="fa fa-sort-alpha-asc"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filedeforder" 
                                <?php
                                if ($setUp->getConfig('filedeforder') == "date") {
                                    echo "checked";
                                } ?> value="date"> <i class="fa fa-calendar"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filedeforder" 
                                <?php
                                if ($setUp->getConfig('filedeforder') == "size") {
                                    echo "checked";
                                } ?> value="size"> <i class="fa fa-tachometer"></i>
                            </label>
                        </div>
                        <div class="checkbox clear toggle checkbox-big">
                            <label>
                                <input type="checkbox" name="show_pagination_folders" 
                                <?php
                                if ($setUp->getConfig('show_pagination_folders')) {
                                        echo "checked";
                                } ?>>
                                <i class="fa fa-caret-left"></i> <i class="fa fa-folder"></i> 
                                <i class="fa fa-caret-right"></i>
                                <?php print $encodeExplorer->getString("show_pagination_folders"); ?>
                            </label>
                        </div>
                        <div class="toggled">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="show_pagination_num_folder" 
                                    <?php
                                    if ($setUp->getConfig('show_pagination_num_folder')) {
                                        echo "checked";
                                    } ?>>
                                    <i class="fa fa-caret-left"></i>..2..<i class="fa fa-caret-right"></i>
                                    <?php print $encodeExplorer->getString("show_pagination_num"); ?>
                                </label>
                            </div>
                            <label class="radio-inline">
                                <input type="radio" name="folderdefnum" 
                                <?php
                                if ($setUp->getConfig('folderdefnum') == 5) {
                                        echo "checked";
                                } ?> value="5"> 5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="folderdefnum" 
                                <?php
                                if ($setUp->getConfig('folderdefnum') == 10) {
                                        echo "checked";
                                } ?> value="10"> 10
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="folderdefnum" 
                                <?php
                                if ($setUp->getConfig('folderdefnum') == 25) {
                                        echo "checked";
                                } ?> value="25"> 25
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="folderdefnum" 
                                <?php
                                if ($setUp->getConfig('folderdefnum') == 50) {
                                        echo "checked";
                                } ?> value="50"> 50
                            </label>
                        </div> <!-- toggled -->
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="folderdeforder" 
                                <?php
                                if ($setUp->getConfig('folderdeforder') == "alpha") {
                                    echo "checked";
                                } ?> value="alpha"> <i class="fa fa-sort-alpha-asc"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="folderdeforder" 
                                <?php
                                if ($setUp->getConfig('folderdeforder') == "date") {
                                    echo "checked";
                                } ?> value="date"> <i class="fa fa-calendar"></i>
                            </label>
                        </div>
                        <div class="form-group">
                        <div class="checkbox clear checkbox-big">
                            <label>
                                <input type="checkbox" name="show_folder_counter" 
                                <?php
                                if ($setUp->getConfig('show_folder_counter')) {
                                        echo "checked";
                                } ?>>
                                <span class="badge hidden-xs">
                                    <i class="fa fa-folder-o"></i> 0
                                </span>
                                <span class="badge hidden-xs">
                                    <i class="fa fa-files-o"></i> 0
                                </span>
                                <?php print $encodeExplorer->getString("counter"); ?>
                            </label>
                        </div>
                        </div>
                        <div class="checkbox checkbox-big form-group">
                            <label>
                                <input type="checkbox" name="download_dir_enable" 
                                <?php
                                if ($setUp->getConfig('download_dir_enable')) {
                                    echo "checked";
                                } ?>> <i class="fa fa-folder-open"></i> <i class="fa fa-angle-double-right"></i> <i class="fa fa-file-zip-o"></i>
                                <?php print $encodeExplorer->getString("folders_download"); ?>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default pull-right" 
                    data-toggle="tooltip" data-placement="left"
                    title="<?php print $encodeExplorer->getString("save_settings"); ?>">
                        <i class="fa fa-save"></i>
                    </button>
                </div>
            </div> <!-- box-body -->
        </div> <!-- box -->
    </div> <!-- col -->
</div> <!-- row -->