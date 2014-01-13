<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <ul class="cl-vnavigation">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'documents', 'action' => 'index')) ?>"><i class="fa fa-home"></i><?php echo __('Quản Lý Văn Bản') ?></a></li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'doctypes', 'action' => 'index')) ?>"><i class="fa fa-smile-o"></i><?php echo __('Quản Lý Loại Văn Bản') ?></a></li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'organs', 'action' => 'index')) ?>"><i class="fa fa-list-alt"></i><?php echo __('Quản Lý Cơ Quan Ban Hành') ?></a>
            </li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'cats', 'action' => 'index')) ?>"><i class="fa fa-table"></i><?php echo __('Quản lý Danh Mục Văn Bản') ?></a>
            </li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'modules', 'action' => 'index')) ?>"><i class="fa fa-map-marker nav-icon"></i><?php echo __('Quản Lý Module') ?></a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>"><i class="fa fa-text-height"></i><?php echo __('Quản Lý Người Dùng') ?></a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'contents', 'action' => 'index')) ?>"><i class="fa fa-bar-chart-o"></i><?php echo __('Quản Lý Trang') ?></a></li>
        </ul>
    </div>
</div>