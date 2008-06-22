<?php


#-------------------------------------------------------------------
# Default messages
#-------------------------------------------------------------------
# Allowed characters in keys are: A-Z, a-z, 0-9, underscore (_) and
# hyphen (-). If you need more characters, you may be able to change
# the regex in MagicWord::initRegex

/* private */ $wgAllMessagesZh_cn = array(
/*
The sidebar for MonoBook is generated from this message, lines that do not
begin with * or ** are discarded, furthermore lines that do begin with ** and
do not contain | are also discarded, but don't depend on this behaviour for
future releases. Also note that since each list value is wrapped in a unique
XHTML id it should only appear once and include characters that are legal
XHTML id names.

Note to translators: Do not include this message in the language files you
submit for inclusion in MediaWiki, it should always be inherited from the
parent class in order maintain consistency across languages.
*/
'sidebar' => '
* navigation
** mainpage|mainpage
** portal-url|portal
** currentevents-url|currentevents
** recentchanges-url|recentchanges
** randompage-url|randompage
** helppage|help
** sitesupport-url|sitesupport',

# User preference toggles
"tog-underline" => "下划链接", /* "Underline links", */
"tog-highlightbroken" => "无效链接格式<a href=\"\" class=\"new\">像这样</a> (或者像这个<a href=\"\" class=\"internal\">?</a>)",
"tog-justify"	=> "段落对齐", /* "Justify paragraphs", */
"tog-hideminor" => "最近更改中隐藏细微修改", /* "Hide minor edits in recent changes", */
"tog-usenewrc" => "最近更改增强（需开启Javascript）", /* "Enhanced recent changes (not for all browsers)", */
"tog-numberheadings" => "标题自动编号", /* "Auto-number headings", */
"tog-showtoolbar" => "显示编辑工具条",
"tog-editondblclick" => "双击页面编辑(JavaScript)",
"tog-editsection"=>"允许通过点击[编辑]链接编辑段落",
"tog-editsectiononrightclick"=>"允许右击标题编辑段落(JavaScript)",
"tog-showtoc"=>"显示目录<br />(针对一页超过3个标题的文章)",
"tog-rememberpassword" => "下次登录时记住密码", /* "Remember password across sessions", */
"tog-editwidth" => "编辑栏位宽度", /* "Edit box has full width", */
'tog-watchcreations' => 'Add pages I create to my watchlist',
"tog-watchdefault" => "监视新的以及更改过的文章", /* "Watch new and modified articles", */
"tog-minordefault" => "默认将编辑设置为微小编辑", /* "Mark all edits minor by default", */
"tog-previewontop" => "在编辑框上方显示预览", /* "Show preview before edit box and not after it" */
'tog-previewonfirst' => '在首次编辑时显示预览',
'tog-nocache' => '禁用页面缓存',
'tog-enotifwatchlistpages' 	=> '在页面更改时发邮件通知我',
'tog-enotifusertalkpages' 	=> '在我的讨论页面更改时发邮件通知我',
'tog-enotifminoredits' 		=> '在页面有微小编辑时发邮件通知我',
'tog-enotifrevealaddr' 		=> '在通知列表中显示我的email地址',
'tog-shownumberswatching' 	=> '显示监视本页的用户数',
'tog-fancysig' => '原始签名（不用自动链接）',
'tog-externaleditor' => '缺省使用外部编辑器',
'tog-externaldiff' => '缺省使用外部差异分析',
'tog-showjumplinks' => 'Enable "jump to" accessibility links',
'tog-uselivepreview' => 'Use live preview (JavaScript) (Experimental)',
'tog-autopatrol' => 'Mark edits I make as patrolled',
'tog-forceeditsummary' => 'Prompt me when entering a blank edit summary',

'underline-always' => '总是使用',
'underline-never' => '从不使用',
'underline-default' => '浏览器默认',

'skinpreview' => '(预览)',

# dates
'sunday' => "星期日",
'monday' => "星期一",
'tuesday' => "星期二",
'wednesday' => "星期三",
'thursday' => "星期四",
'friday' => "星期五",
'saturday' => "星期六",
'january' => "1月",
'february' => "2月",
'march' => "3月",
'april' => "4月",
'may_long' => "5月",
'june' => "6月",
'july' => "7月",
'august' => "8月",
'september' => "9月",
'october' => "10月",
'november' => "11月",
'december' => "12月",
'jan' => "1月",
'feb' => "2月",
'mar' => "3月",
'apr' => "4月",
'may' => "5月",
'jun' => "6月",
'jul' => "7月",
'aug' => "8月",
'sep' => "9月",
'oct' => "10月",
'nov' => "11月",
'dec' => "12月",

# Bits of text used by many pages:
#
'categories1' => 'Category',
"categories" => "页面分类",
"category" => "分类",
"category_header" => "类别”$1“中的条目",
"subcategories" => "次级分类",


'linktrail'		=> '/^([a-z]+)(.*)$/sD',
'linkprefix'		=> '/^(.*?)([a-zA-Z\x80-\xff]+)$/sD',
"mainpage"		=> "首页",
// Modified for mediawiki for XOOPS - by D.J.
'mainpagetext'	=> '<big>MediaWiki for XOOPS已经在['.XOOPS_URL.' {{SITENAME}}]成功安装.</big>',
'mainpagedocfooter' => "请查询[http://xoops.org.cn/modules/mediawiki/index.php/MediaWiki_User%27s_Guide 用户指南]获知使用该wiki软件的相关信息.

== 入门 ==

* [http://xoops.org.cn/modules/mediawiki/index.php/Help:Configuration_settings 参数设置列表]
* [http://xoops.org.cn/modules/mediawiki/index.php/Help:FAQ MediaWiki常见问答]
* [http://mail.wikipedia.org/mailman/listinfo/mediawiki-announce MediaWiki发布邮件列表]

* [http://www.xoops.org The XOOPS Project]
* [http://xoopsforge.com/modules/mediawiki The Mediawiki For XOOPS]",

'portal'		=> '社区',
'portal-url'	=> 'Project:Community Portal',
"about"			=> "关于",
"aboutsite"      => "关于{{SITENAME}}",
'aboutpage'		=> 'Project:About',
'article'		=> '内容',
"help"			=> "帮助",
'helppage'		=> 'Help:Contents',
"bugreports"	=> "错误报告",
'bugreportspage' => 'Project:Bug_reports',
'sitesupport'   => '捐助',
'sitesupport-url' => 'Project:Site support',
"faq"			=> "常见问答",
'faqpage'		=> 'Project:FAQ',
"edithelp"		=> "编辑帮助",
'newwindow'		=> '(在新窗口中打开)',
'edithelppage'	=> 'Help:Editing',
"cancel"		=> "取消",
"qbfind"		=> "寻找",
"qbbrowse"		=> "浏览",
"qbedit"		=> "编辑",
"qbpageoptions" => "页面选项",
"qbpageinfo"	=> "页面信息",
"qbmyoptions"	=> "我的选项",
'qbspecialpages'	=> '特殊页面',
'moredotdotdot'	=> '更多...',
"mypage"		=> "我的页面",
"mytalk"		=> "我的对话页",
'anontalk'		=> '有关该IP的讨论',
'navigation' => '导航',

# Metadata in edit box
'metadata' => '<b>Metadata</b> (<a href="$1">详细解释</a>)',
'metadata_page' => 'Wikipedia:Metadata',

"currentevents" => "新闻动态",
'currentevents-url' => 'Current events',

'disclaimers' => '免责声明',
'disclaimerpage' => 'Project:General_disclaimer',
'privacy' => 'Privacy policy',
'privacypage' => 'Project:Privacy_policy',
"errorpagetitle" => "错误",
"returnto"		=> "返回到$1.",
'tagline'      	=> '来自 {{SITENAME}}',
"whatlinkshere"	=> "链入页面",
"help"			=> "帮助",
"search"		=> "搜索",
"go"		=> "进入",
"history"		=> "修订历史",
'history_short' => '历史',
'updatedmarker' => 'updated since my last visit',
'info_short'	=> '信息',
"printableversion" => "可打印版",
'permalink'     => 'Permanent link',
'print' => '打印',
'edit' => '编辑',
"editthispage"	=> "编辑本页",
'delete' => '删除',
"deletethispage" => "删除本页",
'undelete_short1' => '复原删除',
'undelete_short' => '复原 $1 项删除',
'protect' => '保护',
"protectthispage" => "保护本页",
'unprotect' => '解除保护',
"unprotectthispage" => "解除保护",
"newpage" => "新建页面",
"talkpage"		=> "讨论本页",
'specialpage' => '页面选项',
'personaltools' => '个人工具箱',
"postcomment"   => "发表评论",
'addsection'   => '+',
"articlepage"	=> "查看文章",
"subjectpage"	=> "查看主题", # For compatibility
'talk' => '讨论',
'views' => '点击',
'toolbox' => '工具箱',
"userpage" => "查看会员页面",
"wikipediapage" => "查看META页面",
"imagepage" => 	"查看图像页面",
"viewtalkpage" => "查看讨论",
"otherlanguages" => "其它语言",
"redirectedfrom" => "(重定向自$1)",
'redirectpagesub' => 'Redirect page',
"lastmodified"	=> "最后修订：$1 ",
"viewcount"		=> "浏览统计：$1 次。",
'copyright'	=> '&copy; $1.',
'poweredby'	=> "{{SITENAME}} is powered by [http://www.xoops.org] &amp; [http://www.mediawiki.org/ MediaWiki].",
"printsubtitle" => "(来自 {{SERVER}})",
"protectedpage" => "被保护页",
"administrators" => "{{ns:project}}:管理员",
'jumpto' => 'Jump to:',
'jumptonavigation' => 'navigation',
'jumptosearch' => 'search',

"sysoptitle"	=> "需要管理员权限",
"sysoptext"		=> "您刚才的请求只有拥有管理员权限的用户才可使用。
参见$1。",
"developertitle" => "需要开发员权限",
"developertext"	=> "您刚才的请求只有拥有开发员权限的用户才可使用。
参见$1。",

'badaccess'     => '权限错误',
'badaccesstext' => '您刚才的请求只有具有"$2"权限的用户才可使用
参见 $1.',

'versionrequired' => '需要版本$1的MediaWiki',
'versionrequiredtext' => '需要版本$1的MediaWiki才能使用本页. 参见[[Special:Version]]',

"nbytes"		=> "$1字节",
'ncategories'		=> '$1 categories',
'nrevisions'		=> '$1 revisions',
'widthheight'		=> '$1x$2',
"ok"			=> "确定",
'sitetitle'		=> '{{SITENAME}}',
'pagetitle'		=> '$1 - {{SITENAME}}',
"sitesubtitle"	=> "自由的百科全书",
"retrievedfrom" => "来自\"$1\"",
"youhavenewmessages" => "您有$1。",
"newmessageslink" => "新信息",
'newmessagesdifflink' => 'diff to penultimate revision',
"editsection"=>"编辑",
'editsectionhint' => 'Edit section: $1',
"toc" => "目录",
"showtoc" => "显示",
"hidetoc" => "隐藏",
'thisisdeleted' => "查看或还原 $1？",
'viewdeleted' => 'View $1?',
'restorelink1' => '一项删除',
'restorelink' => "$1 项删除",
'feedlinks' => 'Feed:',
'sitenotice'	=> '-', # the equivalent to wgSiteNotice
'anonnotice' => '-',

# Short words for each namespace, by default used in the 'article' tab in monobook
'nstab-main' => '条目',
'nstab-user' => '用户页',
'nstab-media' => '媒体页',
'nstab-special' => '特殊页',
'nstab-wp' => '项目页',
'nstab-image' => '文件',
'nstab-mediawiki' => '消息',
'nstab-template' => '模板',
'nstab-help' => '帮助',
'nstab-category' => '分类',

# Main script and global functions
#
"nosuchaction"	=> "没有这个命令",
"nosuchactiontext" => "URL请求的命令无法识别。",
"nosuchspecialpage" => "没有这个页面选项。",
"nospecialpagetext" => "您请求的页面无法识别。",

# General errors
#
"error"			=> "错误",
"databaseerror" => "数据库错误",
"dberrortext"	=> "数据库指令语法错误。
可能是由于软件自身的错误所引起。
最后一次数据库指令是：
<blockquote><tt>$1</tt></blockquote>
来自于函数 \"<tt>$2</tt>\"。
MySQL返回错误 \"<tt>$3: $4</tt>\"。",
'dberrortextcl' => "A database query syntax error has occurred.
The last attempted database query was:
\"$1\"
from within function \"$2\".
MySQL returned error \"$3: $4\".\n",
"noconnect"		=> "无法在 $1上连接数据库",
"nodb"			=> "无法选择数据库 $1",
'cachederror'	=> 'The following is a cached copy of the requested page, and may not be up to date.',
'laggedslavemode'   => 'Warning: Page may not contain recent updates.',
"readonly"		=> "数据库禁止访问",
"enterlockreason" => "请输入禁止访问原因, 包括估计重新开放的时间",
'enterlockreason'	=> 'Enter a reason for the lock, including an estimate
of when the lock will be released',
"readonlytext"	=> "数据库目前禁止输入新内容及更改，
这很可能是由于数据库正在维修，之后即可恢复。
管理员有如下解释:
<p>$1",
"missingarticle" => "数据库找不到文字\"$1\"。

<p>通常这是由于修订历史页上过时的链接到已经被删除的页面所导致的。

<p>如果情况不是这样，您可能找到了软件内的一个臭虫。
请记录下URL地址，并向管理员报告。",
'readonly_lag' => 'The database has been automatically locked while the slave database servers catch up to the master',
"internalerror" => "内部错误",
"filecopyerror" => "无法复制文件\"$1\"到\"$2\"。",
"filerenameerror" => "无法重命名文件\"$1\" 到\"$2\"。",
"filedeleteerror" => "无法删除文件 \"$1\"。",
"filenotfound"	=> "找不到文件 \"$1\"。",
"unexpected"	=> "不正常值: \"$1\"=\"$2\"。",
"formerror"		=> "错误：无法完成提交",
"badarticleerror" => "无法在本页进行此项操作。",
"cannotdelete"	=> "无法删除选定的页面或图像（它可能已经被其他人删除了）。",
"badtitle"		=> "错误的标题",
"badtitletext"	=> "所请求页面的标题是无效的、不存在，跨语言或跨wiki链接的标题错误。",
"perfdisabled" => "抱歉！由于此项操作有可能造成数据库瘫痪，目前暂时无法使用。",
"perfdisabledsub" => "这里是自$1的复制版本：",
'perfcached' => '下列数据已被缓存，在下列日期之前可能无法完成:',
'wrong_wfQuery_params' => "错误参数被传递到 wfQuery()<br />
Function: $1<br />
Query: $2',
'viewsource' => '查看源码',
'viewsourcefor' => 'for $1',
'protectedtext' => "该页被锁定以防止编辑; 有几种可能被锁定的原因
请参考
[[Project:Protected page]].

你可以查看拷贝该页源码:",
'sqlhidden' => '(SQL query hidden)',

# Login and logout pages
#
"logouttitle"	=> "用户退出",
"logouttext"	=> "您现在已经退出。
您可以继续以匿名方式使用Wikipeida，或再次以相同或不同用户身份登录。",

"welcomecreation" => "== 欢迎，$1! == 

 您的帐号已经建立，不要忘记设置{{SITENAME}}个人参数。",

"loginpagetitle" => "用户登录",
"yourname"		=> "您的用户名",
"yourpassword"	=> "您的密码",
"yourpasswordagain" => "再次输入密码",
"newusersonly"	=> "（仅限新用户）",
"remembermypassword" => "下次登录记住密码。",
'yourdomainname'       => '你的域名',
'externaldberror'      => '这可能是由于外部验证数据库错误或拟被禁止更新你的外部账号.',
"loginproblem"	=> "<b>登录有问题。</b><br />再试一次！",
"alreadyloggedin" => "<strong>用户$1，您已经登录了!</strong><br />",

"login"			=> "登录",
'loginprompt'           => "你必须启用cookies才能登录{{SITENAME}}.",
"userlogin"		=> "用户登录",
"logout"		=> "退出",
"userlogout"	=> "用户退出",
'notloggedin'	=> '未登录',
'nologin'	=> 'Don\'t have a login? $1.',
'nologinlink'	=> 'Create an account',
"createaccount"	=> "创建新帐号",
'gotaccount'	=> 'Already got an account? $1.',
'gotaccountlink'	=> 'Log in',
 "createaccountmail"     => "通过eMail",
"badretype"		=> "你所输入的密码并不相同。",
"userexists"	=> "您所输入的用户名已有人使用。请另选一个。",
"youremail"		=> "您的电子邮件*",
'username'		=> 'Username:',
'uid'			=> 'User ID:',
'yourrealname'		=> '真实姓名 *',
'yourlanguage'	=> '语言',
'yourvariant'  => '变量',
"yournick"		=> "绰号（签名时用）",
'badsig'		=> 'Invalid raw signature; check HTML tags.',
'email'			=> 'E-mail',
"emailforlost"	=> "* 输入一个电邮地址并不是必须的。但是这将允许他人在您未告知的情况下通过电子邮件与您联系，如果您忘了密码的话电邮地址也会有帮助。",
'prefs-help-email-enotif' => '如果你起用了相关选项，该地址也会用来给你发送email通知.',
'prefs-help-realname' 	=> '* 真实姓名(可选): 你如果提供该项，它将用来记录你的各项贡献.',
"loginerror"	=> "登录错误",
'prefs-help-email'      => '* Email (可选): 可以让其他人通过你的个人页或个人讨论页联系你而不用泄漏你的个人身份.',
'nocookiesnew'	=> "The user account was created, but you are not logged in. {{SITENAME}} uses cookies to log in users. You have cookies disabled. Please enable them, then log in with your new username and password.",
'nocookieslogin'	=> "{{SITENAME}} uses cookies to log in users. You have cookies disabled. Please enable them and try again.",
"noname"		=> "你没有输入一个有效的用户名。",
"loginsuccesstitle" => "登录成功",
"loginsuccess"	=> "你现在以 \"$1\"的身份登录{{SITENAME}}。",
"nosuchuser"	=> "找不到用户 \"$1\"。
检查您的拼写，或者用下面的表格建立一个新帐号。",
'nosuchusershort'	=> "没有用户\"$1\"存在. 请核实你的输入.",
"wrongpassword"	=> "您输入的密码错误，请再试一次。",
'wrongpasswordempty'		=> 'Password entered was blank. Please try again.',
"mailmypassword" => "将新密码寄给我",
"passwordremindertitle" => "{{SITENAME}}密码提醒",
"passwordremindertext" => "有人（可能是您，来自IP地址$1)要求我们将新的{{SITENAME}}登录密码寄给你。
用户 \"$2\" 的密码现在是 \"$3\"。
请立即登录并更改密码。",
"noemail"		=> "用户\"$1\"没有登记电子邮件地址。",
"passwordsent"	=> "用户\"$1\"的新密码已经寄往所登记的电子邮件地址。
请在收到后再登录。",
'eauthentsent' =>  'A confirmation e-mail has been sent to the nominated e-mail address.
Before any other mail is sent to the account, you will have to follow the instructions in the e-mail,
to confirm that the account is actually yours.',
'loginend'		            => '',
'signupend'		            => '{{int:loginend}}',
'mailerror'                 => 'Error sending mail: $1',
'acct_creation_throttle_hit' => 'Sorry, you have already created $1 accounts. You can\'t make any more.',
'emailauthenticated'        => 'Your e-mail address was authenticated on $1.',
'emailnotauthenticated'     => 'Your e-mail address is <strong>not yet authenticated</strong>. No e-mail
will be sent for any of the following features.',
'noemailprefs'              => '<strong>Specify an e-mail address for these features to work.</strong>',
'emailconfirmlink' => 'Confirm your e-mail address',
'invalidemailaddress'	=> 'The e-mail address cannot be accepted as it appears to have an invalid
format. Please enter a well-formatted address or empty that field.',

# Edit page toolbar
'bold_sample'=>'粗体',
'bold_tip'=>'粗体',
'italic_sample'=>'斜体',
'italic_tip'=>'斜体',
'link_sample'=>'链接标题',
'link_tip'=>'内部链接',
'extlink_sample'=>'http://www.example.com 链接标题',
'extlink_tip'=>'外部链接 (加前缀 http://)',
'headline_sample'=>'大标题文字',
'headline_tip'=>'大标题文字',
'math_sample'=>'插入数学公式',
'math_tip'=>'插入数学公式',
'nowiki_sample'=>'插入非格式文本',
'nowiki_tip'=>'插入非格式文本',
'image_sample'=>'Example.jpg',
'image_tip'=>'嵌入图像',
'media_sample'=>'Example.ogg',
'media_tip'=>'媒体文件链接',
'sig_tip'=>'签名',
'hr_tip'=>'水平线',

# Edit pages
#
"summary"		=> "摘要",
"subject"               => "主题",
"minoredit"		=> "微小修改 ",
"watchthis"		=> "监视本页",
"savearticle"	=> "保存本页",
"preview"		=> "预览",
"showpreview"	=> "显示预览",
'showlivepreview'	=> 'Live preview',
'showdiff'	    => '比较差异',
'anoneditwarning' => 'You are not logged in. Your IP address will be recorded in this page\'s edit history.',
'missingsummary' => "'''Reminder:''' You have not provided an edit summary. If you click Save again, your edit will be saved without one.",
'missingcommenttext' => 'Please enter a comment below.',
"blockedtitle"	=> "用户被封",
"blockedtext"	=> "您的用户名或IP地址已被$1封。
理由是：<br />'''$2'''<p>您可以与$1向其他任何[[{{ns:project}}:管理员|管理员]]询问。",
"whitelistedittitle" => "登录后才可编辑",
"whitelistedittext" => "您必须先[[Special:Userlogin|登录]]才可编辑页面。",
"whitelistreadtitle" => "登录后才可阅读",
"whitelistreadtext" => "您必须先[[Special:Userlogin|登录]]才可阅读页面。",
"whitelistacctitle" => "您被禁止建立帐号",
"whitelistacctext" => "在本Wiki中建立帐号您必须先[[Special:Userlogin|登录]]并拥有相关权限。",
'confirmedittitle' => 'E-mail confirmation required to edit',
'confirmedittext' => 'You must confirm your e-mail address before editing pages. Please set and validate your e-mail address through your [[Special:Preferences|user preferences]].',
'loginreqtitle'	=> 'Login Required',
'loginreqlink' => 'login',
'loginreqpagetext'	=> 'You must $1 to view other pages.',
"accmailtitle" => "密码寄出",
"accmailtext" => "'$1'的密码已经寄到$2。",
"newarticle"	=> "（新）",
"newarticletext" =>
"您进入了一个尚未创建的页面。
要创建该页面，请在下面的编辑框中输入内容（详情参见{{ns:project}}:帮助|帮助页面]]）。
如果您不小心来到本页面，直接点击您浏览器中的“返回”按钮。",
'newarticletextanon' => '{{int:newarticletext}}',
'talkpagetext' => '<!-- MediaWiki:talkpagetext -->',
"anontalkpagetext" => "---- ''这是一个还未建立帐号的匿名用户的对话页。我们因此只能用[[IP地址]]来与他／她联络。该IP地址可能由几名用户共享。如果您是一名匿名用户并认为本页上的评语与您无关，请[[Special:Userlogin|创建新帐号或登录]]以避免在未来于其他匿名用户混淆。''",
"noarticletext" => "（本页目前没有内容）",
'noarticletextanon' => '{{int:noarticletext}}',
'clearyourcache' => "'''注意:''' 保存后你可能需要清空浏览器的缓存才能靠到这些修改. '''Mozilla / Firefox / Safari:''' 按下 ''Shift'' 键同时点击 ''刷新'', 或 ''Ctrl-Shift-R'' (在Apple Mac下为 ''Cmd-Shift-R''); '''IE:''' 按下 ''Ctrl'' 键同时点击 ''刷新'', 或 ''Ctrl-F5''; '''Konqueror:''': 只需点击 ''刷新'' 按钮, 或 ''F5''; '''Opera''' 用户可能需要从 ''工具&rarr;设置'' 中清空浏览器缓存.",
'usercssjsyoucanpreview' => "<strong>提示:</strong> 在保存前用'显示预览'查看CSS/JS.",
'usercsspreview' => "'''注意你只是在预览你的个人CSS, 还没有保存!'''",
'userjspreview' => "'''注意你只是在测试预览你的个人JavaScript, 还没有保存!'''",
'userinvalidcssjstitle' => "'''Warning:''' There is no skin \"$1\". Remember that custom .css and .js pages use a lowercase title, e.g. User:Foo/monobook.css as opposed to User:Foo/Monobook.css.",
"updated"		=> "（已更新）",
"note"			=> "<strong>注意：</strong> ",
"previewnote"	=> "请记住这只是预览，内容还未保存！",
'session_fail_preview' => '<strong>Sorry! We could not process your edit due to a loss of session data.
Please try again. If it still doesn\'t work, try logging out and logging back in.</strong>',
"previewconflict" => "这个预览显示了上面文字编辑区中的内容。它将在你选择保存后出现。",
'importing' => 'Importing $1',
"editing"		=> "正在编辑$1",
"editingsection"	=> "正在编辑$1 (段落)",
"editingcomment"	=> "正在编辑$1 (评论)",
"editconflict"	=> "编辑冲突：$1",
"explainconflict" => "有人在你开始编辑后更改了页面。
上面的文字框内显示的是目前本页的内容。
你所做的修改显示在下面的文字框中。
你应当将你所做的修改加入现有的内容中。
<b>只有</b>在上面文字框中的内容会在你点击\"保存页面\"后被保存。<br />",
"yourtext"		=> "您的文字",
"storedversion" => "已保存版本",
'nonunicodebrowser' => "<strong>警告: 你的浏览器不兼容unicode编码. 可以采用如下方式编辑文章: non-ASCII 字符将以十六进制代码方式出现在编辑框中.</strong>",
"editingold"	=> "<strong>警告：你正在编辑的是本页的旧版本。
如果你保存它的话，在本版本之后的任何修改都会丢失。</strong>",
"yourdiff"		=> "差异",
"copyrightwarning" => "请注意您的任何贡献都将被认为是在$2下发布
(细节请见$1).
如果您不希望您的文字被任意修改和再散布，请不要提交。<br />
您同时也向我们保证你所提交的内容是你自己所作，或得自一个不受版权保护或相似自由的来源。
<strong>不要在未获授权的情况下发表！</strong>",
'copyrightwarning2' => "请注意您对{{SITENAME}}的所有贡献
都可能被其他贡献者编辑、修改或删除.
如果您不希望您的文字被任意修改和再散布，请不要提交。<br />
您同时也向我们保证你所提交的内容是你自己所作，或得自一个不受版权保护或相似自由的来源。
<strong>不要在未获授权的情况下发表！</strong>",
'longpageerror' => "<strong>ERROR: The text you have submitted is $1 kilobytes 
long, which is longer than the maximum of $2 kilobytes. It cannot be saved.</strong>",
"readonlywarning" => "<strong>警告：数据库被锁以进行维护，所以您目前将无法保存您的修改。您或许希望先将本断文字复制并保存到文本文件，然后等一会儿再修改。</strong>",
"protectedpagewarning" => "<strong>警告：本页已经被保护，只有拥有管理员权限的用户才可修改。请确认您遵守
[[Project:Protected_page_guidelines|保护页面准则]].</strong>",
'semiprotectedpagewarning' => "'''Note:''' This page has been locked so that only registered users can edit it.",
'templatesused'	=> '该页所用模版:',
'edittools' => '<!-- Text here will be shown below edit and upload forms. -->',
'nocreatetitle' => 'Page creation limited',
'nocreatetext' => 'This site has restricted the ability to create new pages.
You can go back and edit an existing page, or [[Special:Userlogin|log in or create an account]].',

# History pages
#
"revhistory"	=> "修订历史",
"nohistory"		=> "本页没有修订记录。",
"revnotfound"	=> "没有找到修订记录",
"revnotfoundtext" => "您请求的更早版本的修订记录没有找到。
请检查您请求本页面用的 URL 是否正确。",
"loadhist"		=> "载入页面修订历史",
"currentrev"	=> "当前修订版本",
"revisionasof"	=> "$1的修订版本",
'revisionasofwithlink'  => '至$1的版本; $2<br />$3 | $4',
'previousrevision'	=> '更早版本',
'nextrevision'		=> '更新版本',
'currentrevisionlink'   => '查看当前版本',
"cur"			=> "当前",
"next"			=> "后继",
"last"			=> "先前",
"orig"			=> "初始",
"histlegend"	=> "说明：(当前)指与当前修订版本比较；(先前)指与前一个修订版本比较，小 指细微修改。",
'history_copyright'    => '-',
'deletedrev' => '[已删除]',
'histfirst' => '较早版本',
'histlast' => '最近版本',
'rev-deleted-comment' => '(comment removed)',
'rev-deleted-user' => '(username removed)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
This page revision has been removed from the public archives.
There may be details in the [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} deletion log].
</div>',
'rev-deleted-text-view' => '<div class="mw-warning plainlinks">
This page revision has been removed from the public archives.
As an administrator on this site you can view it;
there may be details in the [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} deletion log].
</div>',
#'rev-delundel' => 'del/undel',
'rev-delundel' => 'show/hide',

# Revision deletion
#
'revisiondelete' => 'Delete/undelete revisions',
'revdelete-selected' => 'Selected revision of [[:$1]]:',
'revdelete-text' => "Deleted revisions will still appear in the page history,
but their text contents will be inaccessible to the public.

Other admins on this wiki will still be able to access the hidden content and can
undelete it again through this same interface, unless an additional restriction
is placed by the site operators.",
'revdelete-legend' => 'Set revision restrictions:',
'revdelete-hide-text' => 'Hide revision text',
'revdelete-hide-comment' => 'Hide edit comment',
'revdelete-hide-user' => 'Hide editor\'s username/IP',
'revdelete-hide-restricted' => 'Apply these restrictions to sysops as well as others',
'revdelete-log' => 'Log comment:',
'revdelete-submit' => 'Apply to selected revision',
'revdelete-logentry' => 'changed revision visibility for [[$1]]',

# Diffs
#
"difference"	=> "（修订版本间差异）",
"loadingrev"	=> "载入修订版本比较",
"lineno"		=> "第 $1 行：",
"editcurrent"	=> "编辑本页的当前修订版本",
'selectnewerversionfordiff' => '选择更新的版本作比较',
'selectolderversionfordiff' => '选择更老的版本作比较',
'compareselectedversions' => '比较选定的版本',

# Search results
#
"searchresults" => "搜索结果",
"searchresulttext" => "有关搜索{{SITENAME}}的更多详情,参见[[Project:搜索|搜索{{SITENAME}}]]。",
"searchquery"	=> "查询\"$1\"",
"badquery"		=> "搜索查询不正确",
"badquerytext"	=> "我们无法处理您的查询。
这可能是由于您试图搜索一个短于3个字母的外文单词，
或者您错误地输入了搜索项，例如\"汽车和和火车\"。
请再尝试一个新的搜索项。",
"matchtotals"	=> "搜索项\"$1\"与$2条文章的题目相符，和$3条文章相符。",
"nogomatch" => "没有文章与搜索项完全匹配，请尝试完整文字搜索。",
"titlematches"	=> "文章题目相符",
"notitlematches" => "没有找到匹配文章题目",
"textmatches"	=> "文章内容相符",
"notextmatches"	=> "没有文章内容匹配",

"prevn"			=> "前$1条",
"nextn"			=> "后$1条",
"viewprevnext"	=> "查看 ($1) ($2) ($3).",
"showingresults" => "列表显示<b>$1</b>条结果，从第<b>$2</b>条开始",
'showingresultsnum' => "下面显示从#<b>$2</b>开始的<b>$3</b>条结果.",
"nonefound"		=> "<strong>注意：</strong>失败的搜索往往是由于试图搜索诸如“的”或“和”之类的常见字所引起。",
"powersearch" => "搜索",
"powersearchtext" => "
搜索命名页面：<br />$1<br />$2列出重定向页面；搜索$3 $9",

"searchdisabled" => '{{SITENAME}}搜索功能已关闭. 你可以通过google进行搜索. 请注意他们收录的{{SITENAME}}内容可能已过时.',

'googlesearch' => '
<form method="get" action="http://www.google.com/search" id="googlesearch">
    <input type="hidden" name="domains" value="{{SERVER}}" />
    <input type="hidden" name="num" value="50" />
    <input type="hidden" name="ie" value="$2" />
    <input type="hidden" name="oe" value="$2" />

    <input type="text" name="q" size="31" maxlength="255" value="$1" />
    <input type="submit" name="btnG" value="$3" />
  <div>
    <input type="radio" name="sitesearch" id="gwiki" value="{{SERVER}}" checked="checked" /><label for="gwiki">{{SITENAME}}</label>
    <input type="radio" name="sitesearch" id="gWWW" value="" /><label for="gWWW">WWW</label>
  </div>
</form>',
'blanknamespace' => '(Main)',

# Preferences page
#
"preferences"	=> "参数设置",
"prefsnologin" => "尚未登录",
"prefsnologintext"	=> "您必须先[[Special:Userlogin|登录]]才能设置个人参数。",
"prefsreset"	=> "参数重新设置。",
"qbsettings"	=> "快速导航条设置",
"changepassword" => "更改密码",
"skin"			=> "皮肤",
"math"			=> "数学显示",
'dateformat'		=> '日期格式',
'datedefault'		=> 'No preference',
'datetime'		=> 'Date and time',
"math_failure"		=> "无法解析",
"math_unknown_error"	=> "未知错误",
"math_unknown_function"	=> "未知函数",
"math_lexing_error"	=> "句法错误",
"math_syntax_error"	=> "语法错误",
'math_image_error'	=> 'PNG 转换失败; 请检查latex, dvips, gs以及converty已正确安装',
'math_bad_tmpdir'	=> '无法写入或建立math临时目录',
'math_bad_output'	=> '无法写入或建立math输出目录',
'math_notexvc'	=> '无法执行texvc; 请检查 math/README 进行设置.',
'prefs-personal' => '用户资料',
'prefs-rc' => '最近更改',
'prefs-misc' => '杂项',
"saveprefs"		=> "保存参数设置",
"resetprefs"	=> "重设参数",
"oldpassword"	=> "旧密码",
"newpassword"	=> "新密码",
"retypenew"		=> "确认密码：",
"textboxsize"	=> "文字框尺寸",
"rows"			=> "行",
"columns"		=> "列",
"searchresultshead" => "搜索结果设定",
"resultsperpage" => "每页显示链接数",
"contextlines"	=> "每链显示行数：",
"contextchars"	=> "每行显示字数：",
"stubthreshold" => "stub显示基本限制",
"recentchangescount" => "最近更改页行数",
"savedprefs"	=> "您的个人参数设置已经保存。",
'timezonelegend' => '时区',
"timezonetext"	=> "输入当地时间与服务器时间(UTC)的时差。",
"localtime"	=> "当地时间",
"timezoneoffset" => "请输入时差：",
'servertime'	=> '服务器时间：',
'guesstimezone' => '使用浏览器填充时差',
'allowemail'		=> 'Enable e-mail from other users',
'defaultns'		=> '搜索范围',
'default'		=> '默认',
'files'			=> '文件设定',

# User levels special page
#

# switching pan
'groups-lookup-group' => '设定群组权限',
'groups-group-edit' => '现有群组：',
'editgroup' => '编辑群组',
'addgroup' => '添加群组',

'userrights-lookup-user' => '设定会员群组',
'userrights-user-editname' => '输入会员名称：',
'editusergroup' => '编辑会员群组',

# group editing
'groups-editgroup'          => '编辑群组',
'groups-addgroup'           => '添加群组',
'groups-editgroup-preamble' => 'If the name or description starts with a colon, the
remainder will be treated as a message name, and hence the text will be localised
using the MediaWiki namespace',
'groups-editgroup-name'     => '群组名称：',
'groups-editgroup-description' => 'Group description (max 255 characters):<br />',
'savegroup'                 => 'Save Group',
'groups-tableheader'        => 'ID || Name || Description || Rights',
'groups-existing'           => 'Existing groups',
'groups-noname'             => 'Please specify a valid group name',
'groups-already-exists'     => 'A group of that name already exists',
'addgrouplogentry'          => 'Added group $2',
'changegrouplogentry'       => 'Changed group $2',
'renamegrouplogentry'       => 'Renamed group $2 to $3',

# user groups editing
#
'userrights-editusergroup' => '编辑会员群组',
'saveusergroups' => '存储会员群组',
'userrights-groupsmember' => 'Member of:',
'userrights-groupsavailable' => 'Available groups:',
'userrights-groupshelp' => 'Select groups you want the user to be removed from or added to.
Unselected groups will not be changed. You can deselect a group with CTRL + Left Click',
'userrights-logcomment' => 'Changed group membership from $1 to $2',

# Default group names and descriptions
#
'group-anon-name'       => '匿名',
'group-anon-desc'       => '匿名会员',
'group-loggedin-name'   => '会员',
'group-loggedin-desc'   => 'General logged in users',
'group-admin-name'      => 'Administrator',
'group-admin-desc'      => 'Trusted users able to block users and delete articles',
'group-bureaucrat-name' => '管理群组',
'group-bureaucrat-desc' => 'The bureaucrat group is able to make sysops',
'group-steward-name'    => 'Steward',
'group-steward-desc'    => 'Full access',


# Recent changes
#
"changes" => "更改",
"recentchanges" => "最近更改",
'recentchanges-url' => 'Special:Recentchanges',
"recentchangestext" => "跟踪wiki的最新更改.",
"rcloaderr"		=> "载入最近更改",
"rcnote"		=> "最近修订列表 - 最近<strong>$2</strong>天内的<strong>$1</strong>次最新修订记录：",
"rcnotefrom"	=> "下面是自<b>$2</b>（最多显示<b>$1</b>）。",
"rclistfrom"	=> "显示自$1以来的新更改",
'showhideminor' => "$1 微小修改 | $2 bots | $3 登录用户 | $4 被监控条目 ",
'rcshowhideminor' => '$1 minor edits',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 logged-in users',
'rcshowhideanons' => '$1 anonymous users',
'rcshowhidepatr' => '$1 patrolled edits',
'rcshowhidemine' => '$1 my edits',
"rclinks"		=> "显示最近 $2 天内最新的 $1 次改动。<br />$3",
"rchide"		=> "以$4形式；$1个微小修改；$2个二级命名页面；$3个多重修订",
'rcliu'			=> "; $1 次编辑来自登录用户",
"diff"			=> "差异",
"hist"			=> "历史",
"hide"			=> "隐藏",
"show"			=> "显示",
"tableform"		=> "表格",
"listform"		=> "列表",
"nchanges"		=> "$1个更改",
"minoreditletter" => "小",
"newpageletter" => "新",
'sectionlink' => '→',
'number_of_watching_users_RCview' 	=> '[$1]',
'number_of_watching_users_pageview' 	=> '[$1 个关注用户]',
'rc_categories'	=> 'Limit to categories (separate with "|")',
'rc_categories_any'	=> 'Any',

# Upload
#
"upload"		=> "上传文件",
"uploadbtn"		=> "上传文件",
"uploadlink"	=> "上传图像",
"reupload"		=> "重新上传",
"reuploaddesc"	=> "返回上传表单。",
"uploadnologin" => "请先登录",
"uploadnologintext"	=> "您必须先[[Special:Userlogin|登录]]才能上传文件。",
'upload_directory_read_only' => '上传目录 ($1) 不存在或无写权限。',
"uploaderror"	=> "上传错误",
"uploadtext"	=>
"
使用下面的表单来上载用在条目内新的图像文件。
要查看或搜索以前上传的图片
可以进入[[Special:Imagelist|上传文件列表]],
上传和删除将在[[Special:Log|项目日志]]中记录.

同时你必须选中复选框以确认你上传的文件没有违反任何版权.
点击\"上传\"完成文件上传.

要在文章中加入图像，使用以下形式的连接：
'''<nowiki>[[{{ns:6}}:file.jpg]]</nowiki>''',
'''<nowiki>[[{{ns:6}}:file.png|alt text]]</nowiki>''' 或
'''<nowiki>[[{{ns:-2}}:file.ogg]]</nowiki>'''.",
"uploadlog"		=> "上载纪录",
"uploadlogpage" => "上载纪录",
'uploadlogpagetext' => 'Below is a list of the most recent file uploads.',
"filename"		=> "文件名",
"filedesc"		=> "文件描述",
'fileuploadsummary' => 'Summary:',
'filestatus' => '版权状态',
'filesource' => '来源',
"copyrightpage" => "{{ns:project}}:版权信息",
"copyrightpagename" => "{{SITENAME}}版权",
"uploadedfiles"	=> "已上传文件",
"ignorewarning"	=> "忽略警告并保存文件。",
'ignorewarnings'	=> 'Ignore any warnings',
"minlength"		=> "图像名字必须至少有三个字母。",
'illegalfilename'	=> '文件名"$1"包含有页面标题所禁止的字符。请改名后重新上传。',
"badfilename"	=> "图像名已被改为\"$1\"。",
"badfiletype"	=> "\".$1\"不是所推荐的图像文件格式。",
"largefile"		=> "我们建议图像大小不超过100kb。",
'largefileserver' => 'This file is bigger than the server is configured to allow.',
'emptyfile'		=> 'The file you uploaded seems to be empty. This might be due to a typo in the file name. Please check whether you really want to upload this file.',
'fileexists'		=> 'A file with this name exists already, please check $1 if you are not sure if you want to change it.',
'fileexists-forbidden' => 'A file with this name exists already; please go back and upload this file under a new name. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'A file with this name exists already in the shared file repository; please go back and upload this file under a new name. [[Image:$1|thumb|center|$1]]',
"successfulupload" => "上传成功",
"fileuploaded"	=> "文件\"$1\"上传成功。
请根据连接($2)到图像描述页添加有关文件信息，例如它的来源，在何时由谁创造，
以及其他任何您知道的关于改图像的信息。",
"uploadwarning" => "上传警告",
"savefile"		=> "保存文件",
"uploadedimage" => "已上传\"[[$1]]\"",
'uploaddisabled' => 'Uploads disabled',
'uploaddisabledtext' => 'File uploads are disabled on this wiki.',
'uploadscripted' => 'This file contains HTML or script code that may be erroneously be interpreted by a web browser.',
'uploadcorrupt' => 'The file is corrupt or has an incorrect extension. Please check the file and upload again.',
'uploadvirus' => 'The file contains a virus! Details: $1',
'sourcefilename' => '上传文件',
'destfilename' => '文件名称',

'license' => 'Licensing',
'nolicense' => 'None selected',

# Image list
#
"imagelist"		=> "图像列表",
"imagelisttext"	=> "以下是按$2排列的$1幅图像列表。",
'imagelistforuser' => "This shows only images uploaded by $1.",
"getimagelist"	=> "正在获取图像列表",
"ilsubmit"		=> "搜索",
"showlast"		=> "显示按$2排列的最后$1幅图像。",
"byname"		=> "名字",
"bydate"		=> "日期",
"bysize"		=> "大小",
"imgdelete"		=> "删",
"imgdesc"		=> "述",
"imglegend"		=> "说明：(述) = 显示/编辑图像描述页。",
"imghistory"	=> "图像历史",
"revertimg"		=> "复",
"deleteimg"		=> "删",
"deleteimgcompletely"		=> "删",
"imghistlegend" => "说明: (现) = 目前的图像，(删) = 删除旧版本，
(复) = 恢复到旧版本。
<br /><i>点击日期查看当天上传的图像</i>。",
"imagelinks"	=> "图像链接",
"linkstoimage"	=> "当前图像的链接页面：",
"nolinkstoimage" => "没有页面连接到本图像。",
'sharedupload' => 'This file is a shared upload and may be used by other projects.',
'shareduploadwiki' => 'Please see the [$1 file description page] for further information.',
'shareduploadwiki-linktext' => 'file description page',
'shareddescriptionfollows' => '-',
'noimage'       => 'No file by this name exists, you can [$1 upload it]',
'noimage-linktext'       => 'upload it',
'uploadnewversion' => '[$1 Upload a new version of this file]',

# Mime search
#
'mimesearch' => 'MIME search',
'mimetype' => 'MIME type:',
'download' => 'download',

# Unwatchedpages
#
'unwatchedpages' => 'Unwatched pages',

# List redirects
'listredirects' => 'List redirects',

# Statistics
#
"statistics"	=> "统计",
"sitestats"		=> "{{SITENAME}}统计",
"userstats"		=> "用户统计",
"sitestatstext" => "数据库中共有 <b>$1</b> 页页面；
其中包括对话页、关于 {{SITENAME}} 的页面、最少量的\"stub\"页、重定向的页面，
以及未达到条目质量的页面；除此之外还有 <b>$2</b> 页可能是合乎标准的条目。

'''$8''' files have been uploaded.

<p>从系统软件升级以来，全站点共有页面浏览 <b>$3</b> 次，
页面编辑 <b>$4</b> 次，每页平均编辑 <b>$5</b> 次，
各次编辑后页面的每个版本平均浏览 <b>$6</b> 次。

The [http://meta.wikimedia.org/wiki/Help:Job_queue job queue] length is '''$7'''.",
'userstatstext' => "There are '''$1''' registered users, of which
'''$2''' (or '''$4%''') are administrators (see $3).",

"disambiguations"	=> "消含糊页",
"disambiguationspage"	=> "{{ns:project}}:Links_to_disambiguating_pages",
"disambiguationstext"	=> "以下的条目都有到消含糊页的链接，但它们应该是链到适当的题目。<br />一个页面会被视为消含糊页如果它是链自$1.<br />由其它他名字空间来的链接<i>不会</i>在这儿被列出来。",

"doubleredirects"	=> "双重重定向",
"doubleredirectstext"	=> "<b>请注意：</b> 该列表可能包括不正确的反应。
这通常表示在那页面第一个#REDIRECT之下还有文字。<br />\n
每一行都包含到第一跟第二个重定向页的链接，以及第二个重定向页的第一行文字，
通常显示的都会是\“真正\” 的目标页面，也就是第一个重定向页应该指向的条目。",
'doubleredirectsarrow'	=> '→',

"brokenredirects"	=> "损坏的重定向页",
"brokenredirectstext"	=> "以下的重定向页指向的是不存在的条目。",


# Miscellaneous special pages
#
"orphans"		=> "孤立条目",
"lonelypages"	=> "孤立页面",
'uncategorizedpages'	=> '未分类页',
'uncategorizedcategories'	=> '未整理分类',
'unusedcategories' => '未用分类',
"unusedimages"	=> "未使用图像",
"popularpages"	=> "热点条目",
"nviews"		=> "$1次浏览",
'wantedcategories' => 'Wanted categories',
"wantedpages"	=> "待撰页面",
'mostlinked'	=> '最多连接页',
'mostlinkedcategories' => 'Most linked to categories',
'mostcategories' => 'Articles with the most categories',
'mostimages'	=> 'Most linked to images',
'mostrevisions' => 'Articles with the most revisions',
"nlinks"		=> "$1个链接",
"allpages"		=> "所有页面",
'prefixindex'   => 'Prefix index',
"randompage"	=> "随机页面",
'randompage-url'=> 'Special:Random',
"shortpages"	=> "短条目",
"longpages"		=> "长条目",
'deadendpages'  => 'Dead-end 页',
"listusers"		=> "用户列表",
"specialpages"	=> "特殊页面",
"spheading"		=> "特殊页面",
'restrictedpheading'	=> '受限特殊页',
"protectpage"	=> "保护页面",
"recentchangeslinked" => "链出更改",
"rclsub"		=> "（从 \"$1\"链出的页面）",
"debug"			=> "除错",
"newpages"		=> "新页面",
'ancientpages'		=> '最老页面',
"intl"		=> "跨语言链接",
'move' => '移动',
"movethispage"	=> "移动本页",
"unusedimagestext" => "<p>请注意其他网站（例如其他语言版本的{{SITENAME}}）
有可能直接链接本图像，所以这里列出的图像有可能依然被使用。",
'unusedcategoriestext' => '虽然没有被其它文章或者类别所采用，但列表中的分类页依然存在。',

"booksources"	=> "网络书源",
'categoriespagetext' => '本wiki中存在如下分类.',
'data'	=> '数据',
'userrights' => '用户权限管理',
'groups' => '用户群组',

"booksourcetext" => "以下是链接到销售书籍的网站列表，
因此有可能拥有您所寻找的图书的进一步资料。
{{SITENAME}}与这些公司并没有任何商业关系，因此本表不应该
被看作是一种背书。",
'isbn'	=> 'ISBN',
'rfcurl' =>  'http://www.ietf.org/rfc/rfc$1.txt',
'pubmedurl' =>  'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=pubmed&dopt=Abstract&list_uids=$1',
"alphaindexline" => "$1 到 $2",
'version'		=> '版本历史',
'log'		=> '记录列表',
'alllogstext'	=> '列表显示上传、删除、保护、查封以及管理记录。',

# Special:Allpages
'nextpage'          => '下页 ($1)',
'allpagesfrom'		=> '显示从下面开始的页面:',
'allarticles'		=> '所有文章',
'allnonarticles'	=> '所有非文章',
'allinnamespace'	=> '所有页面 ($1 namespace)',
'allnotinnamespace'	=> '所有页面 (不属于 $1 namespace)',
'allpagesprev'		=> '前',
'allpagesnext'		=> '后',
'allpagessubmit'	=> '确定',

# Email this user
#
"mailnologin"	=> "无邮件地址",
"mailnologintext" => "您必须先[[Special:Userlogin|登录]]
并在[[Special:Preferences|参数设置]]
中有一个有效的e-mail地址才可以电邮其他用户。",
"emailuser"		=> "E-mail该用户",
"emailpage"		=> "E-mail用户",
"emailpagetext"	=> "如果该用户已经在他或她的参数设置页中输入了有效的e-mail地址，以下的表格将寄一个信息给该用户。您在您参数设置中所输入的e-mail地址将出现在邮件“发件人”一栏中，这样该用户就可以回复您。",
'usermailererror' => 'Mail返回错误: ',
'defemailsubject'  => "{{SITENAME}} e-mail",
"noemailtitle"	=> "无e-mail地址",
"noemailtext"	=> "该用户还没有指定一个有效的e-mail地址，
或者选择不接受来自其他用户的e-mail。",

"emailfrom"		=> "发件人",
"emailto"		=> "收件人",
"emailsubject"	=> "主题",
"emailmessage"	=> "信息",
"emailsend"		=> "发送",
"emailsent"		=> "E-mail已发送",
"emailsenttext" => "您的e-mail已经发出。",

# Watchlist
#
"watchlist"		=> "监视列表",
"watchlistsub"	=> "(用户\"$1\")",
"nowatchlist"	=> "您的监视列表为空。",
"watchnologin"	=> "未登录",
"watchnologintext"	=> "您必须先[[Special:Userlogin|登录]]
才能更改您的监视列表",
"addedwatch"	=> "加入到监视列表",
"addedwatchtext" => "本页（“$1”）已经被加入到您的<a href=\"" .
  "{{localurle:Special:Watchlist}}\">监视列表</a>中。
未来有关它或它的对话页的任何修改将会在本页中列出，
而且还会在<a href=\"" .
  "{{localurle:Special:Recentchanges}}\">最近更改列表</a>中
以<b>粗体</b>形式列出。</p>

<p>如果您之后想将该页面从监视列表中删除，点击导航条中的“停止监视”链接。",
"removedwatch"	=> "停止监视",
"removedwatchtext" => "页面“$1”已经从您的监视页面中移除。",
'watch' => '监视',
"watchthispage"	=> "监视本页",
'unwatch' => '取消监视',
"unwatchthispage" => "停止监视",
"notanarticle"	=> "不是条目",
"watchnochange" => "在显示的时间段内您所监视的页面没有更改。",
"watchdetails" => "($1个页面（不含对话页）被监视；
总共$2个页面被编辑；
$3...
[$4 显示并编辑完整列表].)",
'wlheader-enotif' 		=> "* Email已启用.",
'wlheader-showupdated'   => "* 上次访问以来修改的页面以'''粗体'''显示",
"watchmethod-recent" => "检查被监视页面的最近编辑",
"watchmethod-list" => "查看监视页中的最新修改",
"removechecked" => "将被选页面从监视列表中移除",
"watchlistcontains" => "您的监视列表包含$1个页面。",
"watcheditlist" => "这里是您所监视的页面的列表。要移除某一页面，只要选择该页面然后点击”移除页面“按钮。",
"removingchecked" => "移除页面...",
"couldntremove" => "无法移除'$1'...",
"iteminvalidname" => "页面'$1'错误，无效命名...",
"wlnote" => "以下是最近<b>$2</b>小时内的最后$1次修改。",
'wlshowlast' 		=> 'Show last $1 hours $2 days $3',
'wlsaved'		=> '这是你的监视列表的一个保存版本.',
'wlhideshowown'   	=> '$1 我的编辑.',
'wlhideshowbots'   	=> '$1 bot edits.',
'wlshow'		=> '显示',
'wlhide'		=> '隐藏',

'enotif_mailer' 		=> '{{SITENAME}} Notification Mailer',
'enotif_reset'			=> '将所有页面标为已读',
'enotif_newpagetext'=> '这是新建页面.',
'changed'			=> '已修改',
'created'			=> '已建立',
'enotif_subject' 	=> '{{SITENAME}} 有页面 $PAGETITLE 被$PAGEEDITOR $CHANGEDORCREATED',
'enotif_lastvisited' => '从 $1 查看上次访问以来的所有修改.',
'enotif_body' => 'Dear $WATCHINGUSERNAME,

the {{SITENAME}} page $PAGETITLE has been $CHANGEDORCREATED on $PAGEEDITDATE by $PAGEEDITOR, see $PAGETITLE_URL for the current version.

$NEWPAGE

Editor\'s summary: $PAGESUMMARY $PAGEMINOREDIT

Contact the editor:
mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

There will be no other notifications in case of further changes unless you visit this page. You could also reset the notification flags for all your watched pages on your watchlist.

             Your friendly {{SITENAME}} notification system

--
To change your watchlist settings, visit
{{SERVER}}{{localurl:Special:Watchlist/edit}}

Feedback and further assistance:
{{SERVER}}{{localurl:Help:Contents}}',

# Delete/protect/revert
#
"deletepage"	=> "删除页面",
"confirm"		=> "确认",
'excontent' => "内容为: '$1'",
'excontentauthor' => "内容为: '$1' (唯一贡献者为'$2')",
'exbeforeblank' => "被清空前的内容为: '$1'",
'exblank' => '页面为空',
"confirmdelete" => "确认删除",
"deletesub"		=> "（正在删除“$1”）",
'historywarning' => '警告：您将要删除的页内含有',
"confirmdeletetext" => "您即将从数据库中永远删除一个页面或图像以及其历史。
请确定您要进行此项操作，并且了解其后果，同时您的行为符合[[{{ns:project}}:守则与指导]]。",
"actioncomplete" => "操作完成",
"deletedtext"	=> "“$1”已经被删除。
最近删除的纪录请参见$2。",
"deletedarticle" => "已删除“$1”",
"dellogpage"	=> "删除纪录",
"dellogpagetext" => "以下是最近删除的纪录列表。",
"deletionlog"	=> "删除纪录",
"reverted"		=> "恢复到早期版本",
"deletecomment"	=> "删除原因",
"imagereverted" => "恢复到早期版本操作完成。",
"rollback"		=> "恢复",
'rollback_short' => 'Rollback',
"rollbacklink"	=> "rollback",
'rollbackfailed' => '恢复失败',
"cantrollback"	=> "无法恢复编辑；最后的巩县者是本文的唯一作者。",
'alreadyrolled'	=> "无法恢复由[[User:$2|$2]] ([[User talk:$2|Talk]])进行的[[$1]]的最后编辑；
其他人已经编辑或是恢复了该页.

最后编辑: [[User:$3|$3]] ([[User talk:$3|Talk]]). ",
#   only shown if there is an edit comment
'editcomment' => "编辑说明: \"<i>$1</i>\".",
"revertpage"	=> "由$2恢复到$1的最后一次编辑",
'sessionfailure' => 'There seems to be a problem with your login session;
this action has been canceled as a precaution against session hijacking.
Please hit "back" and reload the page you came from, then try again.',
'protectlogpage' => 'Protection_log',
'protectlogtext' => "下面是页面锁定/取消锁定的列表.
更多信息请参考 [[Project:Protected page]].",
'protectedarticle' => '已保护 "[[$1]]"',
'unprotectedarticle' => '已取消保护 "[[$1]]"',
'protectsub' => '(正在保护 "$1")',
'confirmprotecttext' => '确认要保护该页?',
'confirmprotect' => '确认保护',
'protectmoveonly' => '只针对移动做保护',
'protectcomment' => '保护的原因',
'unprotectsub' =>"(正在取消保护 \"$1\")",
'confirmunprotecttext' => '确认要取消对该页的保护?',
'confirmunprotect' => '确认取消保护',
'unprotectcomment' => '取消保护的原因',
'protect-unchain' => 'Unlock move permissions',
'protect-text' => 'You may view and change the protection level here for the page <strong>$1</strong>.
Please be sure you are following the [[Project:Protected page|project guidelines]].',
'protect-viewtext' => 'Your account does not have permission to change
page protection levels. Here are the current settings for the page <strong>$1</strong>:',
'protect-default' => '(default)',
'protect-level-autoconfirmed' => 'Block unregistered users',
'protect-level-sysop' => 'Sysops only',

# restrictions (nouns)
'restriction-edit' => 'Edit',
'restriction-move' => 'Move',


# Undelete
"undelete" => "恢复被删页面",
"undeletepage" => "浏览及恢复被删页面",
'viewdeletedpage' => 'View deleted pages',
"undeletepagetext" => "以下页面已经被删除，但依然在档案中并可以被恢复。
档案库可能被定时清理。",
"undeletearticle" => "恢复被删文章",
"undeleterevisions" => "$1版本存档",
"undeletehistory" => "如果您恢复了该页面，所有版本都会被恢复到修订历史中。
如果本页删除后有一个同名的新页面建立，
被恢复的版本将会称为较新的历史，而新页面的当前版本将无法被自动复原。",
'undeletehistorynoadmin' => 'This article has been deleted. The reason for deletion is
shown in the summary below, along with details of the users who had edited this page
before deletion. The actual text of these deleted revisions is only available to administrators.',
"undeleterevision" => "删除$1时的版本",
"undeletebtn" => "恢复！",
"undeletedarticle" => "已经恢复“$1”",
'undeletedrevisions' => "$1 的版本已恢复",
"undeletedtext"   => "[[:$1|$1]]已经被成功复原。
有关{{SITENAME}}最近的删除与复原，参见[[{{ns:project}}:删除纪录]]",

# Namespace form on various pages
'namespace' => '命名空间:',
'invert' => '反向选定',

# Contributions
#
"contributions"	=> "用户贡献",
"mycontris" => "我的贡献",
"contribsub"	=> "为$1",
"nocontribs"	=> "没有找到符合特征的更改。",
"ucnote"		=> "以下是该用户最近<b><$2/b>天内的最后<b>$1</b>次修改。",
"uclinks"		=> "参看最后$1次修改；参看最后$2天。",
"uctop"		=> " (顶)" ,
'newbies'       => '新手',
'contribs-showhideminor' => '$1条微小编辑',

# What links here
#
"whatlinkshere"	=> "链入页面",
"notargettitle" => "无目标",
"notargettext"	=> "您还没有指定一个目标页面或用户以进行此项操作。",
"linklistsub"	=> "(链接列表)",
"linkshere"		=> "以下页面链接到这里：",
"nolinkshere"	=> "没有页面链接到这里。",
"isredirect"	=> "重定向页",
'istemplate'	=> 'inclusion',

# Block/unblock IP
#
"blockip"		=> "查封IP地址",
"blockiptext"	=> "用下面的表单来禁止来自某一特定IP地址的修改权限。
只有在为防止破坏，及符合[[{{ns:project}}:守则与指导]]的情况下才可采取此行动。
请在下面输入一个具体的理由（例如引述一个被破坏的页面）。",
"ipaddress"		=> "IP地址",
'ipadressorusername' => 'IP 地址或用户名',
'ipbexpiry'		=> 'Expiry',
"ipbreason"		=> "原因",
"ipbsubmit"		=> "查封该地址",
'ipbother'		=> '其他时间',
'ipboptions'		=> '2 小时:2 小时,1 天:1 天,3 天:3 天,1 周:1 周,2 周:2 周,1 月:1 月,3 月:3 月,6 月:6 月,1 年:1 年,永久:永久',
'ipbotheroption'	=> '其他',
"badipaddress"	=> "IP地址不正确。",
"blockipsuccesssub" => "查封成功",
"blockipsuccesstext" => "IP地址“$1”已经被查封。
<br />参看[[Special:被封IP地址列表|被封IP地址列表]]以复审查封。",
"unblockip"		=> "解除禁封IP地址",
"unblockiptext"	=> "用下面的表单来恢复先前被禁封的IP地址的书写权。",
"ipusubmit"		=> "解除禁封",
"ipusuccess"	=> "IP地址“$1”已经被解除禁封",
"ipblocklist"	=> "被封IP地址列表",
"blocklistline"	=> "$1，$2禁封$3 ($4)",
'infiniteblock' => '永久',
'expiringblock' => '到期 $1',
'ipblocklistempty'	=> '封禁列表空.',
"blocklink"		=> "禁封",
"unblocklink"	=> "解除禁封",
"contribslink"	=> "贡献",
'autoblocker'	=> 'Autoblocked because your IP address has been recently used by "[[User:$1|$1]]". The reason given for $1\'s block is: "\'\'\'$2\'\'\'"',
'blocklogpage'	=> 'Block_log',
'blocklogentry'	=> 'blocked "[[$1]]" with an expiry time of $2',
'blocklogtext'	=> 'This is a log of user blocking and unblocking actions. Automatically
blocked IP addresses are not listed. See the [[Special:Ipblocklist|IP block list]] for
the list of currently operational bans and blocks.',
'unblocklogentry'	=> 'unblocked $1',
'range_block_disabled'	=> 'The sysop ability to create range blocks is disabled.',
'ipb_expiry_invalid'	=> 'Expiry time invalid.',
'ip_range_invalid'	=> "Invalid IP range.\n",
'proxyblocker'	=> 'Proxy blocker',
'proxyblockreason'	=> 'Your IP address has been blocked because it is an open proxy. Please contact your Internet service provider or tech support and inform them of this serious security problem.',
'proxyblocksuccess'	=> "Done.\n",
'sorbs'         => 'SORBS DNSBL',
'sorbsreason'   => 'Your IP address is listed as an open proxy in the [http://www.sorbs.net SORBS] DNSBL.',
'sorbs_create_account_reason' => 'Your IP address is listed as an open proxy in the [http://www.sorbs.net SORBS] DNSBL. You cannot create an account',


# Developer tools
#
"lockdb"		=> "禁止更改数据库",
"unlockdb"		=> "开放更改数据库",
"lockdbtext"	=> "锁住数据库将禁止所有用户进行编辑页面、更改参数、编辑监视列表以及其他需要更改数据库的操作。
请确认您的决定，并且保证您在维护工作结束后会重新开放数据库。",
"unlockdbtext"	=> "开放数据库将会恢复所有用户进行编辑页面、修改参数、编辑监视列表以及其他需要更改数据库的操作。
请确认您的决定。",
'unlockdbtext'	=> 'Unlocking the database will restore the ability of all
users to edit pages, change their preferences, edit their watchlists, and
other things requiring changes in the database.
Please confirm that this is what you intend to do.',
"lockconfirm"	=> "是的，我确实想要封锁数据库。",
"unlockconfirm"	=> "是的，我确实想要开放数据库。",
"lockbtn"		=> "数据库上锁",
"unlockbtn"		=> "开放数据库",
"locknoconfirm" => "您并没有勾选确认按钮。",
"lockdbsuccesssub" => "数据库成功上锁",
"unlockdbsuccesssub" => "数据库开放",
"lockdbsuccesstext" => "{{SITENAME}}数据库已经上锁。
<br />请记住在维护完成后重新开放数据库。",
"unlockdbsuccesstext" => "{{SITENAME}}数据库重新开放。",

# Make sysop
'makesysoptitle'	=> 'Make a user into a sysop',
'makesysoptext'		=> 'This form is used by bureaucrats to turn ordinary users into administrators.
Type the name of the user in the box and press the button to make the user an administrator',
'makesysopname'		=> 'Name of the user:',
'makesysopsubmit'	=> 'Make this user into a sysop',
'makesysopok'		=> "<b>User \"$1\" is now a sysop</b>",
'makesysopfail'		=> "<b>User \"$1\" could not be made into a sysop. (Did you enter the name correctly?)</b>",
'setbureaucratflag' => 'Set bureaucrat flag',
'setstewardflag'    => 'Set steward flag',
'bureaucratlog'		=> 'Bureaucrat_log',
'rightslogtext'		=> 'This is a log of changes to user rights.',
'bureaucratlogentry'	=> "Changed group membership for $1 from $2 to $3",
'rights'			=> 'Rights:',
'set_user_rights'	=> 'Set user rights',
'user_rights_set'	=> "<b>User rights for \"$1\" updated</b>",
'set_rights_fail'	=> "<b>User rights for \"$1\" could not be set. (Did you enter the name correctly?)</b>",
'makesysop'         => 'Make a user into a sysop',
'already_sysop'     => 'This user is already an administrator',
'already_bureaucrat' => 'This user is already a bureaucrat',
'already_steward'   => 'This user is already a steward',

# Move page
#
"movepage"		=> "移动页面",
"movepagetext"	=> "用下面的表单来重命名一个页面，并将其修订历史同时移动到新页面。
老的页面将成为新页面的重定向页。
链接到老页面的链接并不会自动更改；
请检查双重或损坏重定向链接。
您应当负责确定所有链接依然会链到指定的页面。

注意如果新页面已经有内容的话，页面将'''不会'''被移动，
除非新页面无内容或是重定向页，而且没有修订历史。
这意味着您再必要时可以在移动到新页面后再移回老的页面，
同时您也无法覆盖现有页面。

<b>警告！</b>
对一个经常被访问的页面而言这可能是一个重大与唐突的更改；
请在行动前先了结其所可能带来的后果。",
"movepagetalktext" => "有关的对话页（如果有的话）将被自动与该页面一起移动，'''除非'''：
*您将页面移动到不同的名字空间（namespaces）；
*新页面已经有一个包含内容的对话页，或者
*您不勾选下面的复选框。

在这些情况下，您在必要时必须手工移动或合并页面。",
"movearticle"	=> "移动页面",
"movenologin"	=> "未登录",
"movenologintext" => "您必须是一名登记用户并且[[Special:Userlogin|登录]]
后才可移动一个页面。",
"newtitle"		=> "新标题",
"movepagebtn"	=> "移动页面",
"pagemovedsub"	=> "移动成功",
"pagemovedtext" => "页面“[[$1]]”已经移动到“[[$2]]”。",
"articleexists" => "该名字的页面已经存在，或者您选择的名字无效。请再选一个名字。",
"talkexists"	=> "页面本身移动成功，
但是由于新标题下已经有对话页存在，所以对话页无法移动。请手工合并两个页面。",
"movedto"		=> "移动到",
"movetalk"		=> "如果可能的话，请同时移动对话页。",
"talkpagemoved" => "相应的对话页也已经移动。",
"talkpagenotmoved" => "相应的对话页<strong>没有</strong>被移动。",
'1movedto2'		=> '从$1转移到$2',
'1movedto2_redir' => '$1 moved to $2 over redirect',
'movelogpage' => 'Move log',
'movelogpagetext' => 'Below is a list of page moved.',
'movereason'	=> '原因',
'revertmove'	=> 'revert',
'delete_and_move' => 'Delete and move',
'delete_and_move_text'	=>
'==Deletion required==

The destination article "[[$1]]" already exists. Do you want to delete it to make way for the move?',
'delete_and_move_reason' => 'Deleted to make way for move',
'selfmove' => "Source and destination titles are the same; can't move a page over itself.",
'immobile_namespace' => "Destination title is of a special type; cannot move pages into that namespace.",

# Export

'export'		=> '导出页面',
'exporttext'	=> 'You can export the text and editing history of a particular page or
set of pages wrapped in some XML. In the future, this may then be imported into another
wiki running MediaWiki software, although there is no support for this feature in the
current version.

To export article pages, enter the titles in the text box below, one title per line, and
select whether you want the current version as well as all old versions, with the page
history lines, or just the current version with the info about the last edit.

In the latter case you can also use a link, e.g. [[{{ns:Special}}:Export/Train]] for the
article [[Train]].
',
'exportcuronly'	=> 'Include only the current revision, not the full history',

# Namespace 8 related

'allmessages'	=> 'System messages',
'allmessagesname' => 'Name',
'allmessagesdefault' => 'Default text',
'allmessagescurrent' => 'Current text',
'allmessagestext'	=> 'This is a list of system messages available in the MediaWiki: namespace.',
'allmessagesnotsupportedUI' => 'Your current interface language <b>$1</b> is not supported by Special:AllMessages at this site. ',
'allmessagesnotsupportedDB' => 'Special:AllMessages not supported because wgUseDatabaseMessages is off.',
'allmessagesfilter' => 'Message name filter:',
'allmessagesmodified' => 'Show only modified',


# Thumbnails

'thumbnail-more'	=> 'Enlarge',
'missingimage'		=> '<b>Missing image</b><br /><i>$1</i>',
'filemissing'		=> 'File missing',
'thumbnail_error'   => 'Error creating thumbnail: $1',

# Special:Import
'import'	=> '导入页面',
'importinterwiki' => 'Transwiki import',
'importtext'	=> 'Please export the file from the source wiki using the Special:Export utility, save it to your disk and upload it here.',
'importfailed'	=> "Import failed: $1",
'importnotext'	=> 'Empty or no text',
'importsuccess'	=> 'Import succeeded!',
'importhistoryconflict' => 'Conflicting history revision exists (may have imported this page before)',
'importnosources' => 'No transwiki import sources have been defined and direct history uploads are disabled.',
'importnofile' => 'No import file was uploaded.',
'importuploaderror' => 'Upload of import file failed; perhaps the file is bigger than the allowed upload size.',

# Keyboard access keys for power users
'accesskey-search' => 'f',
'accesskey-minoredit' => 'i',
'accesskey-save' => 's',
'accesskey-preview' => 'p',
'accesskey-diff' => 'v',
'accesskey-compareselectedversions' => 'v',

# tooltip help for some actions, most are in Monobook.js
'tooltip-search' => 'Search {{SITENAME}} [alt-f]',
'tooltip-minoredit' => 'Mark this as a minor edit [alt-i]',
'tooltip-save' => 'Save your changes [alt-s]',
'tooltip-preview' => 'Preview your changes, please use this before saving! [alt-p]',
'tooltip-diff' => 'Show which changes you made to the text. [alt-d]',
'tooltip-compareselectedversions' => 'See the differences between the two selected versions of this page. [alt-v]',
'tooltip-watch' => 'Add this page to your watchlist [alt-w]',

# stylesheets
'Monobook.css' => '/* edit this file to customize the monobook skin for the entire site */',
#'Monobook.js' => '/* edit this file to change js things in the monobook skin */',

# Metadata
'nodublincore' => 'Dublin Core RDF metadata disabled for this server.',
'nocreativecommons' => 'Creative Commons RDF metadata disabled for this server.',
'notacceptable' => 'The wiki server can\'t provide data in a format your client can read.',

# Attribution

'anonymous' => '{{SITENAME}} 访客',
'siteuser' => '{{SITENAME}} 注册用户 $1',
'lastmodifiedby' => '本页由$2于$1最后更改.',
'and' => '和',
'othercontribs' => '在$1的工作基础上.',
'others' => '其它',
'siteusers' => '{{SITENAME}} 用户 $1',
'creditspage' => '页面致谢',
'nocredits' => 'There is no credits info available for this page.',

# Spam protection

'spamprotectiontitle' => 'Spam protection filter',
'spamprotectiontext' => 'The page you wanted to save was blocked by the spam filter. This is probably caused by a link to an external site.',
'spamprotectionmatch' => 'The following text is what triggered our spam filter: $1',
'subcategorycount' => "There are $1 subcategories to this category.",
'subcategorycount1' => "There is $1 subcategory to this category.",
'categoryarticlecount' => "There are $1 articles in this category.",
'categoryarticlecount1' => "There is $1 article in this category.",
'usenewcategorypage' => "1\n\nSet first character to \"0\" to disable the new category page layout.",
'listingcontinuesabbrev' => " cont.",
'spambot_username' => 'MediaWiki spam cleanup',
'spam_reverting' => 'Reverting to last version not containing links to $1',
'spam_blanking' => 'All revisions contained links to $1, blanking',

# Info page
'infosubtitle' => 'Information for page',
'numedits' => 'Number of edits (article): $1',
'numtalkedits' => 'Number of edits (discussion page): $1',
'numwatchers' => 'Number of watchers: $1',
'numauthors' => 'Number of distinct authors (article): $1',
'numtalkauthors' => 'Number of distinct authors (discussion page): $1',

# Math options
'mw_math_png' => "永远使用PNG图像",    /* "Always render PNG" */
'mw_math_simple' => "如果是简单的公式使用HTML，否则使用PNG图像",   /* "HTML if very simple or else PNG" */
'mw_math_html' => "如果可以用HTML，否则用PNG图像",   /* "HTML if possible or else PNG" */
'mw_math_source' => "显示为TeX代码(使用文字浏览器时)",  /* "Leave it as TeX (for text browsers)" */
'mw_math_modern' => "推荐为新版浏览器使用",  /* "Recommended for modern browsers" */
'mw_math_mathml' => 'MathML if possible (experimental)',

# Patrolling
'markaspatrolleddiff'   => "监控",
'markaspatrolledlink'   => "[$1]",
'markaspatrolledtext'   => "监控该文章",
'markedaspatrolled'     => "已被监控",
'markedaspatrolledtext' => "选定的版本已被监控.",
'rcpatroldisabled'      => "最新更改监控被关闭",
'rcpatroldisabledtext'  => "监控最新更改的功能目前已关闭.",
'markedaspatrollederror'  => "Cannot mark as patrolled",
'markedaspatrollederrortext' => "You need to specify a revision to mark as patrolled.",

# Monobook.js: tooltips and access keys for monobook
'Monobook.js' => '/* tooltips and access keys */
ta = new Object();
ta[\'pt-userpage\'] = new Array(\'.\',\'My user page\');
ta[\'pt-anonuserpage\'] = new Array(\'.\',\'The user page for the ip you\\\'re editing as\');
ta[\'pt-mytalk\'] = new Array(\'n\',\'My talk page\');
ta[\'pt-anontalk\'] = new Array(\'n\',\'Discussion about edits from this ip address\');
ta[\'pt-preferences\'] = new Array(\'\',\'My preferences\');
ta[\'pt-watchlist\'] = new Array(\'l\',\'The list of pages you\\\'re monitoring for changes.\');
ta[\'pt-mycontris\'] = new Array(\'y\',\'List of my contributions\');
ta[\'pt-login\'] = new Array(\'o\',\'You are encouraged to log in, it is not mandatory however.\');
ta[\'pt-anonlogin\'] = new Array(\'o\',\'You are encouraged to log in, it is not mandatory however.\');
ta[\'pt-logout\'] = new Array(\'o\',\'Log out\');
ta[\'ca-talk\'] = new Array(\'t\',\'Discussion about the content page\');
ta[\'ca-edit\'] = new Array(\'e\',\'You can edit this page. Please use the preview button before saving.\');
ta[\'ca-addsection\'] = new Array(\'+\',\'Add a comment to this discussion.\');
ta[\'ca-viewsource\'] = new Array(\'e\',\'This page is protected. You can view its source.\');
ta[\'ca-history\'] = new Array(\'h\',\'Past versions of this page.\');
ta[\'ca-protect\'] = new Array(\'=\',\'Protect this page\');
ta[\'ca-delete\'] = new Array(\'d\',\'Delete this page\');
ta[\'ca-undelete\'] = new Array(\'d\',\'Restore the edits done to this page before it was deleted\');
ta[\'ca-move\'] = new Array(\'m\',\'Move this page\');
ta[\'ca-watch\'] = new Array(\'w\',\'Add this page to your watchlist\');
ta[\'ca-unwatch\'] = new Array(\'w\',\'Remove this page from your watchlist\');
ta[\'search\'] = new Array(\'f\',\'Search this wiki\');
ta[\'p-logo\'] = new Array(\'\',\'Main Page\');
ta[\'n-mainpage\'] = new Array(\'z\',\'Visit the Main Page\');
ta[\'n-portal\'] = new Array(\'\',\'About the project, what you can do, where to find things\');
ta[\'n-currentevents\'] = new Array(\'\',\'Find background information on current events\');
ta[\'n-recentchanges\'] = new Array(\'r\',\'The list of recent changes in the wiki.\');
ta[\'n-randompage\'] = new Array(\'x\',\'Load a random page\');
ta[\'n-help\'] = new Array(\'\',\'The place to find out.\');
ta[\'n-sitesupport\'] = new Array(\'\',\'Support us\');
ta[\'t-whatlinkshere\'] = new Array(\'j\',\'List of all wiki pages that link here\');
ta[\'t-recentchangeslinked\'] = new Array(\'k\',\'Recent changes in pages linked from this page\');
ta[\'feed-rss\'] = new Array(\'\',\'RSS feed for this page\');
ta[\'feed-atom\'] = new Array(\'\',\'Atom feed for this page\');
ta[\'t-contributions\'] = new Array(\'\',\'View the list of contributions of this user\');
ta[\'t-emailuser\'] = new Array(\'\',\'Send a mail to this user\');
ta[\'t-upload\'] = new Array(\'u\',\'Upload images or media files\');
ta[\'t-specialpages\'] = new Array(\'q\',\'List of all special pages\');
ta[\'ca-nstab-main\'] = new Array(\'c\',\'View the content page\');
ta[\'ca-nstab-user\'] = new Array(\'c\',\'View the user page\');
ta[\'ca-nstab-media\'] = new Array(\'c\',\'View the media page\');
ta[\'ca-nstab-special\'] = new Array(\'\',\'This is a special page, you can\\\'t edit the page itself.\');
ta[\'ca-nstab-wp\'] = new Array(\'a\',\'View the project page\');
ta[\'ca-nstab-image\'] = new Array(\'c\',\'View the image page\');
ta[\'ca-nstab-mediawiki\'] = new Array(\'c\',\'View the system message\');
ta[\'ca-nstab-template\'] = new Array(\'c\',\'View the template\');
ta[\'ca-nstab-help\'] = new Array(\'c\',\'View the help page\');
ta[\'ca-nstab-category\'] = new Array(\'c\',\'View the category page\');
',

# image deletion
'deletedrevision' => '删除旧版本 $1.',

# browsing diffs
'previousdiff' => '← 上一个',
'nextdiff' => '下一个 →',

'imagemaxsize' => 'Limit images on image description pages to: ',
'thumbsize'	=> 'Thumbnail size: ',
'showbigimage' => 'Download high resolution version ($1x$2, $3 KB)',

'newimages' => 'Gallery of new files',
'showhidebots' => '($1 bots)',
'noimages'  => 'Nothing to see.',

# short names for language variants used for language conversion links.
# to disable showing a particular link, set it to 'disable', e.g.
# 'variantname-zh-sg' => 'disable',
'variantname-zh-cn' => '大陆简体',
'variantname-zh-tw' => '台湾繁体',
'variantname-zh-hk' => '香港繁体',
'variantname-zh-sg' => '新加坡简体',
'variantname-zh' => '不转换',
# variants for Serbian language
'variantname-sr-ec' => 'sr-ec',
'variantname-sr-el' => 'sr-el',
'variantname-sr-jc' => 'sr-jc',
'variantname-sr-jl' => 'sr-jl',
'variantname-sr' => 'sr',

# labels for User: and Title: on Special:Log pages
'specialloguserlabel' => '用户: ',
'speciallogtitlelabel' => '标题: ',

'passwordtooshort' => 'Your password is too short. It must have at least $1 characters.',

# Media Warning
'mediawarning' => '\'\'\'Warning\'\'\': This file may contain malicious code, by executing it your system may be compromised.
<hr>',

'fileinfo' => '$1KB, MIME type: <code>$2</code>',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'This file contains additional information, probably added from the digital camera or scanner used to create or digitize it. If the file has been modified from its original state, some details may not fully reflect the modified image.',
'metadata-expand' => 'Show extended details',
'metadata-collapse' => 'Hide extended details',
'metadata-fields' => 'EXIF metadata fields listed in this message will
be included on image page display when the metadata table
is collapsed. Others will be hidden by default.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength',

# Exif tags
'exif-imagewidth' =>'Width',
'exif-imagelength' =>'Height',
'exif-bitspersample' =>'Bits per component',
'exif-compression' =>'Compression scheme',
'exif-photometricinterpretation' =>'Pixel composition',
'exif-orientation' =>'Orientation',
'exif-samplesperpixel' =>'Number of components',
'exif-planarconfiguration' =>'Data arrangement',
'exif-ycbcrsubsampling' =>'Subsampling ratio of Y to C',
'exif-ycbcrpositioning' =>'Y and C positioning',
'exif-xresolution' =>'Horizontal resolution',
'exif-yresolution' =>'Vertical resolution',
'exif-resolutionunit' =>'Unit of X and Y resolution',
'exif-stripoffsets' =>'Image data location',
'exif-rowsperstrip' =>'Number of rows per strip',
'exif-stripbytecounts' =>'Bytes per compressed strip',
'exif-jpeginterchangeformat' =>'Offset to JPEG SOI',
'exif-jpeginterchangeformatlength' =>'Bytes of JPEG data',
'exif-transferfunction' =>'Transfer function',
'exif-whitepoint' =>'White point chromaticity',
'exif-primarychromaticities' =>'Chromaticities of primarities',
'exif-ycbcrcoefficients' =>'Color space transformation matrix coefficients',
'exif-referenceblackwhite' =>'Pair of black and white reference values',
'exif-datetime' =>'File change date and time',
'exif-imagedescription' =>'Image title',
'exif-make' =>'Camera manufacturer',
'exif-model' =>'Camera model',
'exif-software' =>'Software used',
'exif-artist' =>'Author',
'exif-copyright' =>'Copyright holder',
'exif-exifversion' =>'Exif version',
'exif-flashpixversion' =>'Supported Flashpix version',
'exif-colorspace' =>'Color space',
'exif-componentsconfiguration' =>'Meaning of each component',
'exif-compressedbitsperpixel' =>'Image compression mode',
'exif-pixelydimension' =>'Valid image width',
'exif-pixelxdimension' =>'Valind image height',
'exif-makernote' =>'Manufacturer notes',
'exif-usercomment' =>'User comments',
'exif-relatedsoundfile' =>'Related audio file',
'exif-datetimeoriginal' =>'Date and time of data generation',
'exif-datetimedigitized' =>'Date and time of digitizing',
'exif-subsectime' =>'DateTime subseconds',
'exif-subsectimeoriginal' =>'DateTimeOriginal subseconds',
'exif-subsectimedigitized' =>'DateTimeDigitized subseconds',
'exif-exposuretime' =>'Exposure time',
'exif-exposuretime-format' => '$1 sec ($2)',
'exif-fnumber' =>'F Number',
'exif-fnumber-format' =>'f/$1',
'exif-exposureprogram' =>'Exposure Program',
'exif-spectralsensitivity' =>'Spectral sensitivity',
'exif-isospeedratings' =>'ISO speed rating',
'exif-oecf' =>'Optoelectronic conversion factor',
'exif-shutterspeedvalue' =>'Shutter speed',
'exif-aperturevalue' =>'Aperture',
'exif-brightnessvalue' =>'Brightness',
'exif-exposurebiasvalue' =>'Exposure bias',
'exif-maxaperturevalue' =>'Maximum land aperture',
'exif-subjectdistance' =>'Subject distance',
'exif-meteringmode' =>'Metering mode',
'exif-lightsource' =>'Light source',
'exif-flash' =>'Flash',
'exif-focallength' =>'Lens focal length',
'exif-focallength-format' =>'$1 mm',
'exif-subjectarea' =>'Subject area',
'exif-flashenergy' =>'Flash energy',
'exif-spatialfrequencyresponse' =>'Spatial frequency response',
'exif-focalplanexresolution' =>'Focal plane X resolution',
'exif-focalplaneyresolution' =>'Focal plane Y resolution',
'exif-focalplaneresolutionunit' =>'Focal plane resolution unit',
'exif-subjectlocation' =>'Subject location',
'exif-exposureindex' =>'Exposure index',
'exif-sensingmethod' =>'Sensing method',
'exif-filesource' =>'File source',
'exif-scenetype' =>'Scene type',
'exif-cfapattern' =>'CFA pattern',
'exif-customrendered' =>'Custom image processing',
'exif-exposuremode' =>'Exposure mode',
'exif-whitebalance' =>'White Balance',
'exif-digitalzoomratio' =>'Digital zoom ratio',
'exif-focallengthin35mmfilm' =>'Focal length in 35 mm film',
'exif-scenecapturetype' =>'Scene capture type',
'exif-gaincontrol' =>'Scene control',
'exif-contrast' =>'Contrast',
'exif-saturation' =>'Saturation',
'exif-sharpness' =>'Sharpness',
'exif-devicesettingdescription' =>'Device settings description',
'exif-subjectdistancerange' =>'Subject distance range',
'exif-imageuniqueid' =>'Unique image ID',
'exif-gpsversionid' =>'GPS tag version',
'exif-gpslatituderef' =>'North or South Latitude',
'exif-gpslatitude' =>'Latitude',
'exif-gpslongituderef' =>'East or West Longitude',
'exif-gpslongitude' =>'Longitude',
'exif-gpsaltituderef' =>'Altitude reference',
'exif-gpsaltitude' =>'Altitude',
'exif-gpstimestamp' =>'GPS time (atomic clock)',
'exif-gpssatellites' =>'Satellites used for measurement',
'exif-gpsstatus' =>'Receiver status',
'exif-gpsmeasuremode' =>'Measurement mode',
'exif-gpsdop' =>'Measurement precision',
'exif-gpsspeedref' =>'Speed unit',
'exif-gpsspeed' =>'Speed of GPS receiver',
'exif-gpstrackref' =>'Reference for direction of movement',
'exif-gpstrack' =>'Direction of movement',
'exif-gpsimgdirectionref' =>'Reference for direction of image',
'exif-gpsimgdirection' =>'Direction of image',
'exif-gpsmapdatum' =>'Geodetic survey data used',
'exif-gpsdestlatituderef' =>'Reference for latitude of destination',
'exif-gpsdestlatitude' =>'Latitude destination',
'exif-gpsdestlongituderef' =>'Reference for longitude of destination',
'exif-gpsdestlongitude' =>'Longitude of destination',
'exif-gpsdestbearingref' =>'Reference for bearing of destination',
'exif-gpsdestbearing' =>'Bearing of destination',
'exif-gpsdestdistanceref' =>'Reference for distance to destination',
'exif-gpsdestdistance' =>'Distance to destination',
'exif-gpsprocessingmethod' =>'Name of GPS processing method',
'exif-gpsareainformation' =>'Name of GPS area',
'exif-gpsdatestamp' =>'GPS date',
'exif-gpsdifferential' =>'GPS differential correction',

# Make & model, can be wikified in order to link to the camera and model name

'exif-make-value' => '$1',
'exif-model-value' =>'$1',
'exif-software-value' => '$1',

# Exif attributes

'exif-compression-1' => 'Uncompressed',
'exif-compression-6' => 'JPEG',

'exif-photometricinterpretation-2' => 'RGB',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-orientation-1' => 'Normal', // 0th row: top; 0th column: left
'exif-orientation-2' => 'Flipped horizontally', // 0th row: top; 0th column: right
'exif-orientation-3' => 'Rotated 180°', // 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Flipped vertically', // 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Rotated 90° CCW and flipped vertically', // 0th row: left; 0th column: top
'exif-orientation-6' => 'Rotated 90° CW', // 0th row: right; 0th column: top
'exif-orientation-7' => 'Rotated 90° CW and flipped vertically', // 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Rotated 90° CCW', // 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'chunky format',
'exif-planarconfiguration-2' => 'planar format',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1' => 'sRGB',
'exif-colorspace-ffff.h' => 'FFFF.H',

'exif-componentsconfiguration-0' => 'does not exist',
'exif-componentsconfiguration-1' => 'Y',
'exif-componentsconfiguration-2' => 'Cb',
'exif-componentsconfiguration-3' => 'Cr',
'exif-componentsconfiguration-4' => 'R',
'exif-componentsconfiguration-5' => 'G',
'exif-componentsconfiguration-6' => 'B',

'exif-exposureprogram-0' => 'Not defined',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Normal program',
'exif-exposureprogram-3' => 'Aperture priority',
'exif-exposureprogram-4' => 'Shutter priority',
'exif-exposureprogram-5' => 'Creative program (biased toward depth of field)',
'exif-exposureprogram-6' => 'Action program (biased toward fast shutter speed)',
'exif-exposureprogram-7' => 'Portrait mode (for closeup photos with the background out of focus)',
'exif-exposureprogram-8' => 'Landscape mode (for landscape photos with the background in focus)',

'exif-subjectdistance-value' => '$1 metres',

'exif-meteringmode-0' => 'Unknown',
'exif-meteringmode-1' => 'Average',
'exif-meteringmode-2' => 'CenterWeightedAverage',
'exif-meteringmode-3' => 'Spot',
'exif-meteringmode-4' => 'MultiSpot',
'exif-meteringmode-5' => 'Pattern',
'exif-meteringmode-6' => 'Partial',
'exif-meteringmode-255' => 'Other',

'exif-lightsource-0' => 'Unknown',
'exif-lightsource-1' => 'Daylight',
'exif-lightsource-2' => 'Fluorescent',
'exif-lightsource-3' => 'Tungsten (incandescent light)',
'exif-lightsource-4' => 'Flash',
'exif-lightsource-9' => 'Fine weather',
'exif-lightsource-10' => 'Cloudy weather',
'exif-lightsource-11' => 'Shade',
'exif-lightsource-12' => 'Daylight fluorescent (D 5700 – 7100K)',
'exif-lightsource-13' => 'Day white fluorescent (N 4600 – 5400K)',
'exif-lightsource-14' => 'Cool white fluorescent (W 3900 – 4500K)',
'exif-lightsource-15' => 'White fluorescent (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Standard light A',
'exif-lightsource-18' => 'Standard light B',
'exif-lightsource-19' => 'Standard light C',
'exif-lightsource-20' => 'D55',
'exif-lightsource-21' => 'D65',
'exif-lightsource-22' => 'D75',
'exif-lightsource-23' => 'D50',
'exif-lightsource-24' => 'ISO studio tungsten',
'exif-lightsource-255' => 'Other light source',

'exif-focalplaneresolutionunit-2' => 'inches',

'exif-sensingmethod-1' => 'Undefined',
'exif-sensingmethod-2' => 'One-chip color area sensor',
'exif-sensingmethod-3' => 'Two-chip color area sensor',
'exif-sensingmethod-4' => 'Three-chip color area sensor',
'exif-sensingmethod-5' => 'Color sequential area sensor',
'exif-sensingmethod-7' => 'Trilinear sensor',
'exif-sensingmethod-8' => 'Color sequential linear sensor',

'exif-filesource-3' => 'DSC',

'exif-scenetype-1' => 'A directly photographed image',

'exif-customrendered-0' => 'Normal process',
'exif-customrendered-1' => 'Custom process',

'exif-exposuremode-0' => 'Auto exposure',
'exif-exposuremode-1' => 'Manual exposure',
'exif-exposuremode-2' => 'Auto bracket',

'exif-whitebalance-0' => 'Auto white balance',
'exif-whitebalance-1' => 'Manual white balance',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Landscape',
'exif-scenecapturetype-2' => 'Portrait',
'exif-scenecapturetype-3' => 'Night scene',

'exif-gaincontrol-0' => 'None',
'exif-gaincontrol-1' => 'Low gain up',
'exif-gaincontrol-2' => 'High gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Soft',
'exif-contrast-2' => 'Hard',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Low saturation',
'exif-saturation-2' => 'High saturation',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Soft',
'exif-sharpness-2' => 'Hard',

'exif-subjectdistancerange-0' => 'Unknown',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Close view',
'exif-subjectdistancerange-3' => 'Distant view',

// Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'North latitude',
'exif-gpslatitude-s' => 'South latitude',

// Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'East longitude',
'exif-gpslongitude-w' => 'West longitude',

'exif-gpsstatus-a' => 'Measurement in progress',
'exif-gpsstatus-v' => 'Measurement interoperability',

'exif-gpsmeasuremode-2' => '2-dimensional measurement',
'exif-gpsmeasuremode-3' => '3-dimensional measurement',

// Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilometres per hour',
'exif-gpsspeed-m' => 'Miles per hour',
'exif-gpsspeed-n' => 'Knots',

// Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'True direction',
'exif-gpsdirection-m' => 'Magnetic direction',

# external editor support
'edit-externally' => 'Edit this file using an external application',
'edit-externally-help' => 'See the [http://meta.wikimedia.org/wiki/Help:External_editors setup instructions] for more information.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'all',
'imagelistall' => 'all',
'watchlistall1' => 'all',
'watchlistall2' => 'all',
'namespacesall' => 'all',

# E-mail address confirmation
'confirmemail' => 'Confirm E-mail address',
'confirmemail_text' => "This wiki requires that you validate your e-mail address
before using e-mail features. Activate the button below to send a confirmation
mail to your address. The mail will include a link containing a code; load the
link in your browser to confirm that your e-mail address is valid.",
'confirmemail_send' => 'Mail a confirmation code',
'confirmemail_sent' => 'Confirmation e-mail sent.',
'confirmemail_sendfailed' => 'Could not send confirmation mail. Check address for invalid characters.',
'confirmemail_invalid' => 'Invalid confirmation code. The code may have expired.',
'confirmemail_success' => 'Your e-mail address has been confirmed. You may now log in and enjoy the wiki.',
'confirmemail_loggedin' => 'Your e-mail address has now been confirmed.',
'confirmemail_error' => 'Something went wrong saving your confirmation.',

'confirmemail_subject' => '{{SITENAME}} e-mail address confirmation',
'confirmemail_body' => "Someone, probably you from IP address $1, has registered an
account \"$2\" with this e-mail address on {{SITENAME}}.

To confirm that this account really does belong to you and activate
e-mail features on {{SITENAME}}, open this link in your browser:

$3

If this is *not* you, don't follow the link. This confirmation code
will expire at $4.
",

# Inputbox extension, may be useful in other contexts as well
'tryexact' => '尝试精确匹配',
'searchfulltext' => '全文搜索',
'createarticle' => '建立文章',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki transcluding is disabled]',
'scarytranscludefailed' => '[Template fetch failed for $1; sorry]',
'scarytranscludetoolong' => '[URL is too long; sorry]',

# Trackbacks
'trackbackbox' => "<div id='mw_trackbacks'>
Trackbacks for this article:<br />
$1
</div>
",
'trackback' => "; $4$5 : [$2 $1]\n",
'trackbackexcerpt' => "; $4$5 : [$2 $1]: <nowiki>$3</nowiki>\n",
'trackbackremove' => ' ([$1 删除])',
'trackbacklink' => 'Trackback',
'trackbackdeleteok' => 'The trackback was successfully deleted.',


# delete conflict

'deletedwhileediting' => 'Warning: This page has been deleted after you started editing!',
'confirmrecreate' => 'User [[User:$1|$1]] ([[User talk:$1|talk]]) deleted this article after you started editing with reason:
: \'\'$2\'\'
Please confirm that really want to recreate this article.',
'recreate' => 'Recreate',
'tooltip-recreate' => '',

'unit-pixel' => 'px'

# HTML dump
'redirectingto' => 'Redirecting to [[$1]]...',

# action=purge
'confirm_purge' => "Clear the cache of this page?\n\n$1",
'confirm_purge_button' => 'OK',

'youhavenewmessagesmulti' => "You have new messages on $1",
'newtalkseperator' => ',_',
'searchcontaining' => "Search for articles containing ''$1''.",
'searchnamed' => "Search for articles named ''$1''.",
'articletitles' => "Articles starting with ''$1''",
'hideresults' => 'Hide results',

);


?>