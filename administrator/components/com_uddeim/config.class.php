<?php
if (!(defined('_JEXEC') || defined('_VALID_MOS'))) { die( 'Direct Access to this location is not allowed.' ); }
if (defined('_uddeConfig')) {
 return true;
} else {
 define('_uddeConfig', 1);
 class uddeimconfigclass {
  var $version = '2.0';
  var $cryptkey = 'uddeIMcryptkey';
  var $datumsformat = 'j M, H:i';
  var $ldatumsformat = 'j F Y, H:i';
  var $emn_sendermail = 'info@timebankspb.ru';
  var $emn_sendername = 'TimeBank';
  var $sysm_username = 'Timebank';
  var $charset = 'UTF-8';
  var $mailcharset = 'UTF-8';
  var $emn_body_nomessage = '';
  var $emn_body_withmessage = '';
  var $emn_forgetmenot = '';
  var $export_format = '';
  var $showtitle = '';
  var $templatedir = 'default';
  var $quotedivider = '__________';
  var $blockgroups = '';
  var $pubblockgroups = '';
  var $hideusers = '0';
  var $pubhideusers = '';
  var $attachmentgroups = '2,7,8';
  var $recaptchaprv = '';
  var $recaptchapub = '';
  var $allowedextensions = '';
  var $gravatard = '';
  var $gravatarr = 'g';
  var $ReadMessagesLifespan = 36524;
  var $UnreadMessagesLifespan = 36524;
  var $SentMessagesLifespan = 36524;
  var $TrashLifespan = 2;
  var $ReadMessagesLifespanNote = 0;
  var $UnreadMessagesLifespanNote = 0;
  var $SentMessagesLifespanNote = 0;
  var $TrashLifespanNote = 1;
  var $adminignitiononly = 0;
  var $pmsimportdone = 2;
  var $blockalert = 0;
  var $blocksystem = 0;
  var $allowemailnotify = 1;
  var $notifydefault = 2;
  var $popupdefault = 0;
  var $allowsysgm = 0;
  var $emailwithmessage = 1;
  var $firstwordsinbox = 40;
  var $longwaitingdays = 14;
  var $longwaitingemail = 1;
  var $maxlength = 0;
  var $showcblink = 1;
  var $showcbpic = 1;
  var $showonline = 1;
  var $allowarchive = 0;
  var $maxarchive = 100;
  var $allowcopytome = 1;
  var $trashoriginal = 1;
  var $perpage = 8;
  var $enabledownload = 1;
  var $inboxlimit = 0;
  var $showinboxlimit = 0;
  var $allowpopup = 0;
  var $allowbb = 2;
  var $allowsmile = 1;
  var $animated = 1;
  var $animatedex = 0;
  var $showmenuicons = 1;
  var $bottomlineicons = 1;
  var $actionicons = 1;
  var $showconnex = 1;
  var $showsettingslink = 1;
  var $showabout = 0;
  var $emailtrafficenabled = 1;
  var $getpiclink = 1;
  var $connex_listbox = 0;
  var $forgetmenotstart = 1329938504;
  var $realnames = 1;
  var $cryptmode = 0;
  var $modeshowallusers = 2;
  var $useautocomplete = 1;
  var $allowmultipleuser = 1;
  var $connexallowmultipleuser = 1;
  var $allowmultiplerecipients = 1;
  var $showtextcounter = 1;
  var $allowforwards = 1;
  var $showgroups = 0;
  var $mailsystem = 0;
  var $searchinstring = 1;
  var $maxrecipients = 0;
  var $languagecharset = 1;
  var $usecaptcha = 1;
  var $captchalen = 4;
  var $pubfrontend = 0;
  var $pubfrontenddefault = 0;
  var $pubmodeshowallusers = 0;
  var $hideallusers = 0;
  var $pubhideallusers = 0;
  var $unblockCBconnections = 1;
  var $CBgallery = 1;
  var $enablelists = 0;
  var $maxonlists = 100;
  var $timedelay = 0;
  var $pubrealnames = 0;
  var $pubreplies = 0;
  var $pubemail = 0;
  var $csrfprotection = 1;
  var $trashrestriction = 0;
  var $replytruncate = 0;
  var $allowflagged = 1;
  var $overwriteitemid = 0;
  var $useitemid = 0;
  var $timezone = 0;
  var $pubuseautocomplete = 0;
  var $pubsearchinstring = 1;
  var $mootools = 3;
  var $autoresponder = 0;
  var $autoforward = 0;
  var $rows = 10;
  var $cols = 60;
  var $width = 450;
  var $enablefilter = 1;
  var $enablereply = 1;
  var $enablerss = 0;
  var $showigoogle = 1;
  var $showhelp = 0;
  var $separator = 0;
  var $rsslimit = 20;
  var $restrictallusers = 0;
  var $trashoriginalsent = 0;
  var $reportspam = 0;
  var $checkbanned = 1;
  var $enableattachment = 0;
  var $maxsizeattachment = 16384;
  var $maxattachments = 3;
  var $fileadminignitiononly = 1;
  var $showlistattachment = 1;
  var $showmenucount = 0;
  var $encodeheader = 0;
  var $enablesort = 1;
  var $captchatype = 0;
  var $unprotectdownloads = 0;
  var $waitdays = 0;
  var $avatarw = 60;
  var $avatarh = 86;
  var $gravatar = 0;
  var $addccline = 0;
  var $modnewusers = 0;
  var $modpubusers = 0;
  var $restrictcon = 0;
  var $restrictrem = 0;
  var $stime = 0;
  var $dontsefmsglink = 0;
  // temporary variables
  var $flags = 0;
  var $userid = 0;
  var $usergid = Array();
  var $cbitemid = 0;
 }
}
