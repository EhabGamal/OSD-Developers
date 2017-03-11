<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Portlets - General Portlets</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="../assets/admin/layout2/css/themes/dark.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
	<style>
		.fit{

			width:94px !important;

			height:14px!important;

		}
		.list{

			padding: 0px !important;
		}
		.forum,.trr{

            box-shadow: none;
            background-color: white !important;
            margin-bottom: 5px !important;

            border-bottom:1px solid #ECF0F1 !important;
		}
        tr.trr{
            margin: 5px !important;
        }
		.no_shadow{
			box-shadow: none;

		}

		.noo-margin{
			margin-bottom: 0px !important;
		}
        .nooo-margin{
            margin: 0px !important;
        }

        .padding8{
            padding: 8px !important;
        }
        padding_c{
            padding-bottom: 5px !important;
        }
		.no-bpadding{
			padding-bottom: 0px !important;
		}
        .grey-l{
            background-color: #f7f7f7 !important;
        }

        .page-content{
            background-color: white !important;
        }
        .white{
            color: white !important;
        }

        .fa-angle-down{
            color: white !important;
        }
        .whiteb{
            background-color: white;
        }
        .topiclist{
            margin: 10px;
            -webkit-padding-start:0px !important;
            padding: 0px ;

        }
        ul.topiclist li {
            display:inline-block !important;
            vertical-align: middle !important;
            line-height: normal !important;

        }

        li.col1{
            width: 45%;
            vertical-align: center;

        }
        li.col2{
            width: 15%;
            vertical-align: center !important;
            position: relative;
            top: 50% !important;


        }
        li.col3{


        }
        li.col4{
            width: 30%;
        }

        .thread{
            padding: 20px !important;
        }

        li span{
            display: inline-block !important;
        }
        li span p{
            margin-left:10px;
            margin-bottom: 0px;
            vertical-align: center;
        }
        .no-padding{
            padding: 0px !important;
            -webkit-padding-start:0px !important;
        }
        .lpad{
            padding-left: 10px !important;
        }
        .side-pading{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }


	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class=" page-md  page-container-bg-solid page-sidebar-closed-hide-logo  ">
<!-- BEGIN HEADER -->
<?php include 'header.php'; ?>
<!-- END HEADER -->
<div class="">
	<div class="page-container page-full-width">
		<div class="page-content-wrapper">
			<div class="page-content">
				<h2 class="page-title">
					OS Forums <small>open source forum lab 42</small>
				</h2>
                <div class="page-bar grey-l">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="home.php">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">user</a>
                        </li>


                    </ul>

                </div>


                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <span class="caption-subject bold font-blue uppercase">
									Control Panel </span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="#portlet_tab1" data-toggle="tab"><i class="fa fa-users"></i>
                                            users </a>
                                    </li>
                                    <li>
                                        <a href="#portlet_tab2" data-toggle="tab"><i class="fa fa-files-o"></i>
                                            content </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="portlet_tab1">
                                        <div >
                                            <div class="portlet light no_shadow">
                                                <div class="portlet-title">
                                                    <div class="caption font-blue">

                                                        <span class="caption-subject bold uppercase"> Users</span>
                                                        <span class="caption-helper"></span>
                                                    </div>
                                                    <div class="actions">

                                                        <a href="#addu" data-toggle="modal" class="btn blue btn-sm u-add">
                                                            <i class="fa fa-plus"></i> User</a>

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
                                                        <table class="table table-hover table-advance">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Full Name</th>
                                                                <th>Username</th>
                                                                <th>Status</th>
                                                                <th>action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($users as $index=>$user): ?>
                                                            <tr userid="<?=$user->id?>">
                                                                <td><?=$index+1;?></td>
                                                                <td><?=$user->getFullName();?></td>
                                                                <td><?=$user->username;?></td>
                                                                <td>
                                                                    <span class="label label-sm label- <?=$user->cssclass?>"><?=$user->name?></span>
                                                                </td>
                                                                <td>
                                                                    <a href="#editu" data-toggle="modal" class="btn default btn-circle btn-xs green edit-user">
                                                                        <i class="fa fa-edit"></i></a>
                                                                    <a href="#removeu" data-toggle="modal" class="btn default btn-circle btn-xs red u-del">
                                                                        <i class="fa fa-remove"></i></a>

                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portlet_tab2">
                                        <div >
                                            <div class="portlet light no_shadow">
                                                <div class="portlet-title">
                                                    <div class="caption font-blue">

                                                        <span class="caption-subject bold uppercase"> Content</span>
                                                        <span class="caption-helper"></span>
                                                    </div>
                                                    <div class="actions not-s-form">

                                                        <a href="#adds" data-toggle="modal" class="btn  blue btn-sm add-section">
                                                            <i class="fa fa-plus"></i> section</a>

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <?php foreach($sections as $section): ?>
                                                    <div class="portlet box blue no_shadow not-s-form" section_id="<?=$section->id?>">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <!--i class="fa fa-gift"></i-->
                                                                <span class="caption-subject bold uppercase"><?=$section->name?></span>
                                                                <span class="caption-helper white"><?=$section->desc?></span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="#edits" data-toggle="modal" class="edit-section " ><i class="fa fa-edit white"></i>
                                                                </a>
                                                                <a href="javascript:;" class="collapse">
                                                                </a>
                                                                <a href="javascript:;" class="fullscreen ">
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="portlet-body grey-l padding_c">
                                                            <a href="#addf" data-toggle="modal" class="btn  blue btn-sm add-forum pull-right margin-top-10 " >
                                                                <i class="fa fa-plus"></i> Forum</a><br><br><br>
                                                            <?php foreach($section->forums as $forum): ?>
                                                                <div class=" no-padding" >
                                                                    <div class="table-responsive  noo-margin">
                                                                        <table class="table table-hover table-striped table-light" forum_id="<?=$forum->id?>">
                                                                            <tbody >
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;">
                                                                                        <?=$forum->name?> </a>
                                                                                </td>
                                                                                <td>
                                                                                    <i class="fa fa-eye"> &nbsp;&nbsp;  <?=$forum->views?></i>
                                                                                </td>
                                                                                <td>
                                                                                    <i class="fa fa-list-alt">  &nbsp;&nbsp; <?=count($forum->threads)?></i>

                                                                                </td>
                                                                                <td>
                                                                                    <?=$forum->createdate?>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#editf" data-toggle="modal" class="btn default btn-circle btn-xs green edit-forum"><i class="fa fa-edit"></i></a>
                                                                                    <a href="#removef" data-toggle="modal" class="btn default btn-circle btn-xs red del-forum"><i class="fa fa-remove"></i></a>
                                                                                    <!--a href="#removet" data-toggle="modal" class="btn default btn-circle btn-xs red t-del"><i class="fa fa-lock"></i></a>
                                                                                    <a href="#removet" data-toggle="modal" class="btn default btn-circle btn-xs red t-del"><i class="fa fa-thumb-tack"></i></a-->
                                                                                </td>
                                                                            </tr>



                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>


                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		    	</div>
                <!------------------ modals ----------------->
                <div class="modal fade bs-modal-lg" id="adds" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">add new section</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Title
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">description
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" margin-top-20 btn default" data-dismiss="modal">Cancle</button>
                                <button class="margin-top-20 btn blue" type="submit">add section</button>
                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="addf" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">add new forum</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Title
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">description
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" margin-top-20 btn default" data-dismiss="modal">Cancle</button>
                                <button class="margin-top-20 btn blue" type="submit">add forum</button>
                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="addu" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">add new user</h4>
                            </div>
                            <div class="modal-body">
                                <form action="admin.php" method="post" class="register-form">
                                    <input type="hidden" name="action" value="addUser">
                                    <p class="hint">
                                        Enter personal details below:
                                    </p>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">First Name</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="fname"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="lname"/>
                                    </div>
                                    <div class="form-group">
                                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                        <label class="control-label visible-ie8 visible-ie9">Email</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
                                    </div>
                                    <p class="hint">
                                        Enter account details below:
                                    </p>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Username</label>
                                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" btn default" data-dismiss="modal">Cancle</button>
                                <button type="submit" id="register-submit-btn" class="btn  blue uppercase">Add user</button>
                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="editu" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">edit user</h4>
                            </div>
                            <div class="modal-body">
                                <form action="admin.php" method="post">
                                    <input type="hidden" name="action" value="register">
                                    <p class="hint">
                                        personal details :
                                    </p>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">First Name</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="fname"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="lname"/>
                                    </div>
                                    <div class="form-group">
                                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                        <label class="control-label visible-ie8 visible-ie9">Email</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="radio radio-inline margin-top-20 margin-bottom-20">
                                            <input type="radio" name="gender" value="m" id="editmale"/> Male
                                        </label>
                                        <label for="" class="radio radio-inline margin-top-20 margin-bottom-20">
                                            <input type="radio" name="gender" value="f" id="editfemale"/> Female
                                        </label>
                                    </div>
                                    <p class="hint">
                                        account below:
                                    </p>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Username</label>
                                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                                    </div>
                                    <div class="form-group margin-top-20 margin-bottom-20">

                                        <div id="register_tnc_error">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" margin-top-20 btn default" data-dismiss="modal">Cancle</button>
                                <button type="submit" id="edit-user" class="btn margin-top-20  blue uppercase">save</button>

                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="removeu" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">remove user</h4>
                            </div>
                            <div class="modal-body">
                                <p>are you sure you want to remove user</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" btn default" data-dismiss="modal">NO</button>
                                <button type="button" id="remove-user" class="btn red uppercase">yes</button>

                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="removef" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <span></span>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">remove forum</h4>
                            </div>
                            <div class="modal-body">
                                <p>are you sure you want to remove forum</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" btn default" data-dismiss="modal">NO</button>
                                <button type="button" id="del-forum" class="btn red uppercase">yes</button>

                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="editf" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">edit forum</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Title
                                        </label>
                                        <input type="text" name="title" class="form-control">
                                        <input type="hidden" name="forumid">
                                        <input type="hidden" name="sectionid">

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">description
                                        </label>
                                        <input type="text" name="desc" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" margin-top-20 btn default" data-dismiss="modal">Cancle</button>
                                <button class="margin-top-20 btn blue" type="submit" id="edit-forum">save</button>
                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade bs-modal-lg" id="edits" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">edit section</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Title
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">description
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=" margin-top-20 btn default" data-dismiss="modal">Cancle</button>
                                <button class="margin-top-20 btn blue" type="submit">save</button>
                                </form>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>




                <!------------------ modals end ----------------->
		</div>
	</div>
</div>

<!-- BEGIN JAVASCRIPTS(Loadjavascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
    Login.init();
Demo.init(); // init demo features
});
///////mu script///////////////
$('.edit-user').on('click',function(e){
    var userid = e.target.closest('tr').getAttribute('userid');
    console.log(userid);
    //$('#spinner-bg').show();
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'getUser',
            userid: userid
        },
        success: function(data){
            var res = JSON.parse(data);
            console.log(res);
            if(res.success)
                loadUSerData(res.data);
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });
    //$('#spinner-bg').hide();
});
$('.edit-forum').click(function (e) {
    var forumid=e.target.closest('table').getAttribute('forum_id');
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'getforumData',
            forumid: forumid
        },
        success: function(data){
            var res = JSON.parse(data);
            console.log(res);
            if(res.success)

                loadForumData(res.data);
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})
$('.del-forum').click(function (e) {
    var forumid=e.target.closest('table').getAttribute('forum_id');
   $('#removef #del-forum').attr('forumid',forumid);
})

$('#edit-forum').click(function (e) {
    e.preventDefault();
    var forumid=$('#editf input[name="forumid"]').val();
    var sectionid=$('#editf input[name="sectionid"]').val();
    var title =$('#editf input[name="title"]').val();
    var desc= $('#editf input[name="desc"]').val();

    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'updateForum',
            forumid: forumid,
            forumname:title,
            forumdesc:desc,
            sectionid:sectionid
        },
        success: function(data){
            var res = JSON.parse(data);
            if(res.success)
                window.location.href = "admin.php";
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})
$('#del-forum').click(function (e) {
    e.preventDefault();
    var forumid=e.target.getAttribute('forumid');
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'deleteForum',
            forumid: forumid
        },
        success: function(data){
            var res = JSON.parse(data);
            if(res.success)
                console.log('success')
               // window.location.href = "admin.php";
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})


function loadUSerData(data){
    $('#editu input[name="title"]').val(data.fname);
    $('#editu input[name="lname"]').val(data.lname);
    $('#editu input[name="username"]').val(data.username);
    $('#editu input[name="email"]').val(data.email);
    if(data.gender == 'm')
        $('#editu #male').prop('checked',true);
    else
        $('#editu #female').prop('checked',true);

}
function loadForumData(data){
    $('#editf input[name="title"]').val(data.name);
    $('#editf input[name="desc"]').val(data.desc);
   $('#editf input[name="forumid"]').val(data.id);
    $('#editf input[name="sectionid"]').val(data.sectionid);
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
