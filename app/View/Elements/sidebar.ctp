<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <ul class="cl-vnavigation">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'documents', 'action' => 'index')) ?>"><i class="fa fa-home"></i>Quản lý văn bản</a></li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'doctypes', 'action' => 'index')) ?>"><i class="fa fa-smile-o"></i>Quản lý loại văn bản</a></li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'organs', 'action' => 'index')) ?>"><i class="fa fa-list-alt"></i>Quản lý Cơ quan ban hành</a>
            </li>
            <li class="parent"><a href="<?php echo $this->Html->url(array('controller' => 'cats', 'action' => 'index')) ?>"><i class="fa fa-table"></i>Quản lý lĩnh vực</a>
            </li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'modules', 'action' => 'index')) ?>"><i class="fa fa-map-marker nav-icon"></i>Quản lý module</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>"><i class="fa fa-text-height"></i>Quản lý người dùng</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'contents', 'action' => 'index')) ?>"><i class="fa fa-bar-chart-o"></i>Quản lý Trang</a></li>
        </ul>
    </div>
</div>