<?php
/**
 * The common simplified chinese file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     chanzhiEPS
 * @version     $Id$
 * @link        http://www.zentao.net
 */
/* Common sign setting. */
$lang->colon      = ' ：';
$lang->prev       = '‹';
$lang->next       = '›';
$lang->equal      = '=';
$lang->percent    = '%';
$lang->laquo      = '&laquo;';
$lang->raquo      = '&raquo;';
$lang->minus      = ' - ';
$lang->dollarSign = '$';
$lang->divider    = "<span class='divider'>{$lang->raquo}</span> ";
$lang->back2Top   = 'Top';
$lang->cancel     = 'Cancel';

/*Language shorthand*/
$lang->cn = '简';
$lang->tw = '繁';
$lang->en = 'EN';

$lang->toBeAdded = 'Add';

$lang->about  = 'About';
$lang->thanks = 'Thanks';

/* Lang items for xirang. */
$lang->chanzhiEPS     = 'CHANGER';
$lang->chanzhiEPSx    = 'CHANGER';
$lang->agreement      = "I have read and understood<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE 1.2》</a>. <span class='text-danger'>If not authorized, any signs/links of Changer shouldn't be removed, hidden or covered.</span>";
$lang->poweredBy      = "<a href='http://www.changerpress.com/?v=%s' target='_blank' title='%s'>%s</a>";
$lang->poweredByAdmin = "<span id='poweredBy'> is powered by <a href='http://www.changerpress.com/?v=%s' target='_blank' title='%s'>Changer CMS %s</a></span>";
$lang->newVersion     = "Note: Changer CMS has released <span id='version'></span> on <span id='releaseDate'></span>. <a href='' target='_blank' id='upgradeLink'>Download it NOW!</a>";
$lang->execInfo       = "<span id='execInfoBar' class='hide'><span class='text-left'>SQL query：<b>%s</b> <br> Memory footprint: <b>%s</b><br> PHP E-time: <b>%s</b> s</span></span>";
$lang->customCssError = "Fail to load the self-defined css file, if you are the administrator of this site, please reset the apperence of the site in the admin";
$lang->redirecting    = "Redirecting to %s，<a href='%s'>Redirect immediately</a>";

/* Global lang items. */
$lang->home             = 'Home';
$lang->siteHome         = 'Homepage';
$lang->welcome          = 'Welcome to Changer, <strong>%s</strong>!';
$lang->messages         = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs          = 'Today is %s，';
$lang->aboutUs          = 'About Us';
$lang->link             = 'Links';
$lang->frontHome        = 'FrontEnd';
$lang->forumHome        = 'Forum';
$lang->bookHome         = 'Book';
$lang->dashboard        = 'Dashboard';
$lang->visualEdit       = 'Visual Editor';
$lang->editMode         = 'Edit Mode';
$lang->register         = 'Register';
$lang->logout           = 'Logout';
$lang->login            = 'Login';
$lang->account          = 'Account';
$lang->password         = 'Password';
$lang->changePassword   = 'Password';
$lang->setEmail         = "Email";
$lang->setSecurity      = 'Security';
$lang->forgotPassword   = 'Forgot password?';
$lang->currentPos       = 'Current Page';
$lang->categoryMenu     = 'Menu';
$lang->wechatTip        = 'Wechat Subscription';
$lang->qrcodeTip        = 'QR Code';
$lang->language         = 'Language';
$lang->custom           = 'Custom';
$lang->productMenu      = 'Product';

/* Global action items. */
$lang->reset          = 'Reset';
$lang->edit           = 'Edit';
$lang->copy           = 'Copy';
$lang->hide           = 'Hide';
$lang->delete         = 'Delete';
$lang->close          = 'Close';
$lang->save           = 'Save';
$lang->confirm        = 'Confirm';
$lang->addToBlacklist = 'Widget';
$lang->send           = 'Send';
$lang->preview        = 'Preview';
$lang->goback         = 'Back';
$lang->more           = 'More';
$lang->refresh        = 'Refresh';
$lang->actions        = 'Action';
$lang->feature        = 'Feature';
$lang->year           = 'Year';
$lang->selectAll      = 'Select All';
$lang->selectReverse  = 'Select Reverse';
$lang->loading        = 'In progress...';
$lang->saveSuccess    = 'Done';
$lang->setSuccess     = 'Done';
$lang->createSuccess  = 'Done';
$lang->sendSuccess    = 'Done';
$lang->deleteSuccess  = 'Deleted';
$lang->fail           = 'Failed';
$lang->noResultsMatch = 'No match found!';
$lang->alias          = 'For SEO, use letters and numbers.';
$lang->keywordsHolder = 'Use commas to separate keywords.';

$lang->setOkFile = <<<EOT
<h5>Please confirm your admin account by following steps below.</h5>
<p>Create %s file.</p>
EOT;

$lang->color       = 'Color';
$lang->colorTip    = 'hexadecimal colors';
$lang->colorPlates = '333333|000000|CA1407|45872B|148D00|F25D03|2286D2|D92958|A63268|04BFAD|D1270A|FF9400|299182|63731A|3D4DBE|7382D9|754FB9|F2E205|B1C502|364245|C05036|8A342A|E0DDA2|B3D465|EEEEEE|FFD0E5|D0FFFD|FFFF84|F4E6AE|E5E5E5|F1F1F1|FFFFFF';

$lang->score = new stdclass();
$lang->score->common = 'Points';

/* Items for javascript. */
$lang->js = new stdclass();
$lang->js->confirmDelete    = 'Do you want to delete it?';
$lang->js->deleteing        = 'Deleting';
$lang->js->doing            = 'Processing';
$lang->js->loading          = 'Loading';
$lang->js->updating         = 'Updating';
$lang->js->timeout          = 'Timeout. Please try it again.';
$lang->js->errorThrown      = '<h4> Error </h4>';
$lang->js->continueShopping = 'Continue shopping';
$lang->js->required         = 'Required';
$lang->js->back             = 'Back';
$lang->js->continue         = 'Continue';

/* Contact fields*/
$lang->company = new stdclass();
$lang->company->contactUs = 'Contact Us';
$lang->company->contacts  = 'Contacts';
$lang->company->address   = 'Address';
$lang->company->phone     = 'Phone';
$lang->company->email     = 'Email';
$lang->company->fax       = 'Fax';
$lang->company->qq        = 'QQ';
$lang->company->skype     = 'Skype';
$lang->company->weibo     = 'Weibo';
$lang->company->weixin    = 'Wechat';
$lang->company->wangwang  = 'wangwang';
$lang->company->site      = 'Website';

/* Sitemap settings. */
$lang->sitemap = new stdclass();
$lang->sitemap->common = 'Sitemap';

/* The groups navbar */
$lang->groups = new stdclass();
$lang->groups->home     = array('title' => 'Home', 'link' => 'admin|index|',               'icon' => 'home');
$lang->groups->content  = array('title' => 'CMS', 'link' => 'article|admin|type=article', 'icon' => 'edit');
$lang->groups->shop     = array('title' => 'Mall', 'link' => 'order|admin|',               'icon' => 'shopping-cart');
$lang->groups->user     = array('title' => 'User', 'link' => 'user|admin|',                'icon' => 'group');
$lang->groups->promote  = array('title' => 'SEO', 'link' => 'stat|traffic|',              'icon' => 'volume-up');
$lang->groups->design   = array('title' => 'UI', 'link' => 'ui|settemplate|',            'icon' => 'paint-brush');
$lang->groups->open     = array('title' => 'Ext', 'link' => 'package|browse|',            'icon' => 'cloud');
$lang->groups->setting  = array('title' => 'Set', 'link' => 'site|setbasic|',             'icon' => 'cog');

/* The main menus. */
$lang->menu = new stdclass();
$lang->menu->admin      = 'Home|admin|index|';
$lang->menu->article    = 'Article|article|admin|type=article';
$lang->menu->blog       = 'Blog|article|admin|type=blog';
$lang->menu->book       = 'Book|book|admin|';
$lang->menu->page       = 'Page|article|admin|type=page';
$lang->menu->attachment = 'File|file|admin|';

$lang->menu->order        = 'Order|order|admin|';
$lang->menu->product      = 'Product|product|admin|';
$lang->menu->orderSetting = 'Settings|product|setting|';

$lang->menu->user         = 'User|user|admin|';
$lang->menu->message      = 'Message|message|admin|type=message';
$lang->menu->comment      = 'Comment|message|admin|type=comment';
$lang->menu->reply        = 'Reply|message|admin|type=reply';
$lang->menu->forum        = 'Forum|forum|admin|';
$lang->menu->thread       = 'Thread|forum|admin|';
$lang->menu->forumreply   = 'Post|reply|admin|';
$lang->menu->submittion   = 'Submission|article|admin|type=submittion&tab=user';
$lang->menu->wechat       = 'Wechat|wechat|message|mode=replied&replied=0';

$lang->menu->stat    = 'Stats|stat|traffic|';
$lang->menu->tag     = 'Keywords|tag|admin|';
$lang->menu->links   = 'Links|links|admin|';

$lang->menu->ui       = 'UI|ui|settemplate|';
$lang->menu->logo     = 'Logo|ui|setlogo|';
$lang->menu->nav      = 'Navigation|nav|admin|';
$lang->menu->block    = 'Widget|block|admin|';
$lang->menu->slide    = 'Slide|slide|admin|';
$lang->menu->others   = "Settings|ui|others|";
$lang->menu->effect   = "Effect|ui|effect|";
$lang->menu->visual   = "<i class='icon icon-magic'></i>Visual Editor|visual|index|";
$lang->menu->edit     = "Custom|ui|edittemplate|";

$lang->menu->site      = 'Site|site|setbasic|';
$lang->menu->security  = 'Security|site|setsecurity|';
$lang->menu->company   = 'Company|company|setbasic|';
$lang->menu->score     = 'Points|score|setcounts|';
$lang->menu->interface = 'API|site|setoauth|';

$lang->menu->package    = 'Extensions|package|browse|';
$lang->menu->themestore = 'Themes|ui|themestore|';
$lang->menu->community  = 'Community|admin|register|';

/* Menu groups setting. */
$lang->menuGroups = new stdclass();
$lang->menuGroups->mail    = 'site';
$lang->menuGroups->wechat  = 'site';
$lang->menuGroups->group   = 'security';
$lang->menuGroups->tree    = 'article';
$lang->menuGroups->search  = 'site';
$lang->menuGroups->company = 'site';
$lang->menuGroups->score   = 'site';
$lang->menuGroups->guarder = 'security';

/* Menu of article module. */
$lang->article = new stdclass();
$lang->article->menu = new stdclass();
$lang->article->menu->browse       = 'Articles|article|admin|';

/* Menu of blog module. */
$lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->browse       = 'Blogs|article|admin|type=blog';

/* Menu of page module. */
$lang->page = new stdclass();
$lang->page->menu = new stdclass();
$lang->page->menu->browse = array('link' => 'Pages|article|admin|type=page', 'alias' => 'create, edit');

$lang->express = new stdclass();

$lang->orderSetting = new stdclass();
$lang->orderSetting->menu = new stdclass();
$lang->orderSetting->menu->orderSetting = 'Settings|product|setting|';
$lang->orderSetting->menu->express      = 'Shipping Carrier|tree|browse|type=express';

/* Menu of product module. */
$lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse = array('link' => 'Product|product|admin|', 'alias' => 'create, edit');

/* Menu of UI module. */
$lang->ui = new stdclass();

/* Menu of theme. */
$lang->theme = new stdclass();
$lang->theme->menu = new stdclass();
$lang->theme->menu->theme   = 'Theme|ui|settemplate|';
$lang->theme->menu->layout  = array('link' => 'Layout|block|pages|', 'alias' => 'setregion');
$lang->theme->menu->custom  = 'Appearance|ui|customtheme|';
$lang->theme->menu->code    = 'Code|ui|setcode|';
$lang->theme->menu->source  = 'Source|file|browsesource|';

/* Menu of user module. */
$lang->user = new stdclass();

/* Menu of message module. */
$lang->message = new stdclass();

/* Menu of forum module. */
$lang->forum = new stdclass();
$lang->forum->menu = new stdclass();
$lang->forum->menu->browse  = 'Threads|forum|admin|';
$lang->forum->menu->reply   = 'Replies|reply|admin|';
$lang->forum->menu->tree    = 'Boards|tree|browse|type=forum';
$lang->forum->menu->update  = 'Updates|forum|update|';
$lang->forum->menu->setting = 'Settings|forum|setting|';

/* Menu of site module. */
$lang->site = new stdclass();
$lang->site->menu = new stdclass();
$lang->site->menu->basic     = 'Basic Settings|site|setbasic|';
$lang->site->menu->langs     = 'Language Settings|site|setlanguage|';
$lang->site->menu->request   = 'Request Type|site|seturltype|';
$lang->site->menu->domain    = 'Domain Settings|site|setdomain|';
$lang->site->menu->cdn       = 'CDN Settings|site|setcdn|';
$lang->site->menu->cache     = 'Cache Settings|site|setcache|';
$lang->site->menu->home      = 'Homepage Menu|site|sethomemenu|';
$lang->site->menu->search    = 'Full Text Retrieval|search|buildindex|';
$lang->site->menu->backup    = 'Backup/Restore|backup|index|';
//$lang->site->menu->api      = 'API|site|setapi|';

/* Menu of company module. */
if(!isset($lang->company)) $lang->company = new stdclass();
$lang->company->menu = new stdclass();
$lang->company->menu->company   = 'Company|company|setbasic|';
$lang->company->menu->contact   = 'Contact|company|setcontact|';

/* Menu of security module. */
$lang->security = new stdclass();
$lang->security->menu = new stdclass();
$lang->security->menu->basic     = 'Basic Settings|site|setsecurity|';
$lang->security->menu->filter    = 'Filter|site|setfilter|';
$lang->security->menu->blacklist = 'Blacklist|guarder|setblacklist|';
$lang->security->menu->whitelist = 'Whitelist|guarder|setwhitelist|';
$lang->security->menu->sensitive = 'Sensitive Words|site|setsensitive|';
$lang->security->menu->captcha   = 'Security Questions|guarder|setcaptcha|';
$lang->security->menu->upload    = 'Attachment Upload|site|setupload|';
$lang->security->menu->admin     = 'Administrators|user|admin|admin=1';
$lang->security->menu->group     = array('link' => 'Group Privilege|group|browse|', 'alias' => 'managepriv,managemember');
$lang->security->menu->log       = 'Login Log|user|adminlog|';

$lang->interface = new stdclass();
$lang->interface->menu = new stdclass();
$lang->interface->menu->oauth  = 'Oauth|site|setoauth|';
$lang->interface->menu->mail   = array('link' => 'Mail Setting|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->interface->menu->wechat = array('link' => 'Wechat setting|wechat|admin|', 'alias' => 'create,edit,adminresponse,integrate');

/* Menu of score module. */
$lang->score->menu = $lang->site->menu;
$lang->score->menu->score     = 'Point Rules|score|setcounts|';
$lang->score->menu->stateInfo = 'Point Info|score|showstateinfo|';

$lang->cart    = new stdclass();
$lang->order   = new stdclass();
$lang->address = new stdclass();

/* Menu of tree module. */
$lang->tree = new stdclass();
$lang->tree->menu = $lang->article->menu;

/* Menu of reply module. */
$lang->reply = new stdclass();
$lang->reply->menu = $lang->forum->menu;

/* Menu of wechat module. */
$lang->wechat = new stdclass();
$lang->wechat->menu = $lang->site->menu;

/* Menu of search module. */
$lang->search = new stdclass();
$lang->search->menu   = $lang->site->menu;
$lang->search->common = 'Search';

/* Menu of group module. */
$lang->group = new stdclass();
$lang->group->menu = $lang->security->menu;

/* Menu of package module. */
$lang->package = new stdclass();

/* Menu of stat module. */
$lang->stat = new stdclass();
$lang->stat->menu = new stdclass();
$lang->stat->menu->traffic  = 'Traffic|stat|traffic|';
$lang->stat->menu->from     = 'Source|stat|from|';
$lang->stat->menu->domains  = array('link' => 'Domain|stat|domainlist|', 'alias' => 'domaintrend,domainpage');
$lang->stat->menu->search   = 'Search Engine|stat|search|';
$lang->stat->menu->keywords = 'Keywords|stat|keywords|';
$lang->stat->menu->client   = 'Clients|stat|client|type=browser';
$lang->stat->menu->page     = 'Page Clicks|stat|page|';
$lang->stat->menu->setStat  = 'Settings|stat|setting|';

/* Error info. */
$lang->error = new stdclass();
$lang->error->length       = array('<strong>%s</strong> Length Error. It should be <strong>%s</strong>', '<strong>%s</strong> should be <= <strong>%s</strong> and >= <strong>%s</strong>。');
$lang->error->reg          = '<strong>%s</strong> Format Error. It should be <strong>%s</strong>.';
$lang->error->unique       = '<strong>%s</strong> has already had <strong>%s</strong>.';
$lang->error->notempty     = '<strong>%s</strong> should not be blank.';
$lang->error->equal        = '<strong>%s</strong> has to be <strong>%s</strong>.';
$lang->error->gt           = "<strong>%s</strong> should be > <strong>%s</strong>.";
$lang->error->ge           = "<strong>%s</strong> should be >= <strong>%s</strong>.";
$lang->error->lt           = "<strong>%s</strong> should be < <strong>%s</strong>.";
$lang->error->le           = "<strong>%s</strong> should be <= <strong>%s</strong>.";
$lang->error->in           = '<strong>%s</strong> has to be <strong>%s</strong>.';
$lang->error->int          = array('<strong>%s</strong> should be numbers.', '<strong>%s</strong> minimum value is %s',  '<strong>%s</strong> should be between <strong>%s-%s</strong>.');
$lang->error->float        = '<strong>%s</strong> shoud be a number/decimal.';
$lang->error->email        = '<strong>%s</strong> should be valid Email.';
$lang->error->phone        = '<strong>%s</strong> should be valid phone number.';
$lang->error->mobile       = '<strong>%s</strong> should be valid mobile phone number.';
$lang->error->URL          = '<strong>%s</strong> should be valid URL.';
$lang->error->date         = '<strong>%s</strong> should be valid date.';
$lang->error->account      = '<strong>%s</strong> should be any combination of letters and numbers and must be a minimum of 3 characters.';
$lang->error->passwordsame = 'Passwords should match.';
$lang->error->passwordrule = 'Password should be a minimum of 6 characters and meet its setting requirement.';
$lang->error->captcha      = 'Please enter correct verification code.';
$lang->error->noWritable   = '%s is not writable. Please update your privilege!';
$lang->error->fingerprint  = 'Authentication expired. Please try again!';
$lang->error->token        = 'Must be letters/numbers and the characters between 3-32.';
$lang->error->sensitive    = 'No sensitive words allowed!';
$lang->error->noRepeat     = 'No duplicated content!';
$lang->error->between      = '<strong>%s</strong>should in between<strong>%s</strong>.';

/* The pager items. */
$lang->pager = new stdclass();
$lang->pager->noRecord     = "No record found!";
$lang->pager->digest       = "<strong>%s</strong> Records found. %s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "<strong>%s</strong> Records per Page";
$lang->pager->first        = "<i class='icon-step-backward' title='Home'></i>";
$lang->pager->pre          = "<i class='icon-play icon-rotate-180' title='Previous'></i>";
$lang->pager->next         = "<i class='icon-play' title='Next'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='last page'></i>";
$lang->pager->locate       = "GO!";
$lang->pager->previousPage = "Previous";
$lang->pager->nextPage     = "Next";
$lang->pager->summery      = "<strong>%s-%s</strong> of <strong>%s</strong>.";

$lang->date = new stdclass();
$lang->date->minute = 'min';
$lang->date->day    = 'day';

/* Date times. */
define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'n月d日 H:i');
define('DT_DATE1',     'Y年m月d日');
define('DT_DATE2',     'Ymd');
define('DT_DATE3',     'Y年m月d日');
define('DT_DATE4',     'Y-m-d');
define('DT_TIME1',     'H:i:s');
define('DT_TIME2',     'H:i');

/* Keywords for chanzhi. */
$lang->k  = 'Open Source CMS - Changer;';
$lang->k .= 'Changer, free and open source CMS;';
$lang->k .= 'Changer, your #1 Choice;';
$lang->k .= 'Website building, choose Changer;';
$lang->k .= 'Changer, free and open source php CMS.';
