<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="navbar navbar-default navbar-relative-top" style="margin-top: -50px;" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">DirectBusiness</a>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
				    <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Addresse(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Addresse(s) List'), array('controller' => 'addresses', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New address'), array('controller' => 'addresses', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    -->
				    <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Candidate(s) Phone(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?php //= $this->Html->link(__('Candidate(s) Phone(s) List'), array('controller' => 'candidatesPhones', 'action' => 'index')); ?></li>
				            <li><?php //= $this->Html->link(__('New candidate phone'), array('controller' => 'candidatesPhones', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    -->
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Job(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Job(s) List'), array('controller' => 'jobs', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New job'), array('controller' => 'jobs', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Apply(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Apply(s) List'), array('controller' => 'applys', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New apply'), array('controller' => 'applys', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('CoverLetter(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('CoverLetter(s)'), array('controller' => 'coverLetters', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New cover letter'), array('controller' => 'coverLetters', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('CV(s) Online') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Cv(s) List'), array('controller' => 'cvs', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New CV'), array('controller' => 'cvs', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('CV File(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('File(s) List'), array('controller' => 'files', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New file'), array('controller' => 'files', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('CV Language Level(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?php //= $this->Html->link(__('CvsLanguageLevelsLanguage(s) List'), array('controller' => 'cvsLanguageLevelsLanguages ', 'action' => 'index')); ?></li>
				            <li><?php //= $this->Html->link(__('New CV Language Level'), array('controller' => 'cvsLanguageLevelsLanguages ', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				     -->
				     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Enterprise(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Enterprise(s) List'), array('controller' => 'enterprises', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New enterprise'), array('controller' => 'enterprises', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Candidate(s)') ?><span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('Candidate(s) List'), array('controller' => 'candidates', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New candidate'), array('controller' => 'candidates', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				    <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Phone(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?php //= $this->Html->link(__('User(s) List'), array('controller' => 'phones', 'action' => 'index')); ?></li>
				            <li><?php //= $this->Html->link(__('New user'), array('controller' => 'phones', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				     -->
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('User(s)') ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				            <li><?= $this->Html->link(__('User(s) List'), array('controller' => 'users', 'action' => 'index')); ?></li>
				            <li><?= $this->Html->link(__('New user'), array('controller' => 'users', 'action' => 'add')); ?></li>
				        </ul>
				    </li>
				</ul>
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <?= $this->fetch('tb_actions') ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-divider"></li>
                    <?php
                        $loguser = $this->request->session()->read('Auth.User');
                        $roleName = $this->request->session()->read('Auth.User.role_id');
                        if ($roleName == "1") {
                        	$roleName = "Admin";
                        } else if ($roleName == "2") {
                        	$roleName = "Candidate";
                        } else if ($roleName == "3") {
                        	$roleName = "Enterprise";
                        }
                        if ($loguser) {?>
                            <li><a href="/users/view/<?= $loguser['id'] ?>"> [<?= $roleName ?>] <?= $loguser['username'] ?></a></li>
                            <?php
                            echo "<li>" . $this->Html->link('<span class="glyphicon glyphicon-log-out"> </span>' . ' ' . __('Log out'),
                                array('controller' => 'Users', 'action' => 'logout', '_full' => true),
                                array ('escape' => false)) . "</li>";
                        } else {
                            echo "<li>" . $this->Html->link('<span class="glyphicon glyphicon-log-in"> </span> ' . ' '  . __('Login') ,
                                array('controller' => 'Users', 'action' => 'login', '_full' => true),
                                array ('escape' => false)) . "</li>";
                            echo str_repeat('&nbsp;', 2);
                            echo "<li>" . $this->Html->link('<span class="glyphicon glyphicon-user"> </span> ' . ' '  . __('Register'),
                                array('controller' => 'Users', 'action' => 'add', '_full' => true),
                                array ('escape' => false)) . "</li>";
                            echo str_repeat('&nbsp;', 3);
                        }
                        ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><?= $this->request->controller; ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
$this->end();

echo $this->Flash->render('auth');

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');
