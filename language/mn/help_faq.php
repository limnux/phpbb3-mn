<?php
/** 
*
* help_faq [Mongolian]
*
* @package language
* @version $Id: help_faq.php,v 1.42 2007/10/04 15:07:24 B.Munkh-Erdene $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Нэвтрэх болон бүртгэлтэй холбоотой асуудлууд'
	),
	array(
		0 => 'Яагаад би нэвтэрч чадахгvй байна бэ?',
		1 => 'Та бvртгvvлсэн vv? Та нэвтрэхээсээ өмнө заавал бүртгүүлсэн байх хэрэгтэй. Танд форумаас хориг тавьсан уу (хэрэв тийм бол энэ тухай мэдээлэл харагдах болно)? Хэрвээ тийм бол та яагаад гэдгийг нь мэдэхийн тулд вебмастер юмуу форумын удирдагчтай холбоо барина уу! Та бүртгэгдсэн мөн танд ямар нэгэн хориг тавигдаагүй байж нэвтэрч чадахгүй байгаа бол та хэрэглэгчийн нэр болон нууц үгээ зөв бичсэн эсэхээ дахин шалгаж үзнэ үү!. Ихэнхдээ энэ нь гол шалтгаан байдаг бөгөөд, хэрэв үгүй бол, та форумын удирдлагатай холбоо барина уу, учир нь тэд форумдаа алдаатай тохиргоо хийсэн байж магадгүй.'
	),
	array(
		0 => 'Яагаад би заавал бүртгүүлэх ёстой бэ?',
		1 => 'Та магадгүй бүртгүүлэх хэрэггүй ч байж болно, энэ нь та бичлэг оруулахдаа бүртгүүлсэн байх хэрэгтэй эсэхийг чуулганы удирдагч хэрхэн тохируулсанаас хамаарна. Тэгэхдээ л та бүртгүүлсэнээр зочин хэрэглэгчид хэрэглэх боломжгүй өөрийн гэсэн хөрөг зураг ашиглах, хувийн зурвас илгээх, андууддаа имэйл илгээх, бүлгэмд нэгдэх гэх мэт олон боломжуудаар хангагдах болно. Бүртгүүлэхэд та ердөө хэдхэн мөч л зарцуулах бөгөөд таныг бүртгүүлэхийг зөвлөж байна.'
	),
	array(
		0 => 'Яагаад би автоматаар гарчихаад байна бэ?',
		1 => 'Хэрэв та чуулганд нөвтөрч байх үедээ Намайг шууд нэвтрүүлж бай гэдгийг чагтлаагүй бол та чуулганд тодорхой хугацааны дотор л нэвтэрсэн чигтээ байж чадна. Энэ нь таны бүртгэлийг хэн нэг нь буруугаар ашиглахаас хамгаалж буй хэрэг юм. Нэвтэрсэн чигтээ байгаад байхын тулд нэвтрэх үедээ энэхүү сонголтыг чагтална уу, тэгэхдээ та чуулган руу олон хүмүүс хэрэглэдэг компьютероос хандаж буй үед энэ нь нэг их тохиромжтой зүйл биш, Ж нь. номын сан, интернэт кафе, их сургууль гэх мэт'
	),
	array(
		0 => 'Холбогдсон хэрэглэгчийн нэрсийн жагсаалтаас хэрхэн өөрийн нэрийг нуух бэ?',
		1 => 'Within the UCP under “Forum preferences” you will find an option <em>Hide your online status</em>, if you enable this option with <samp>Yes</samp>, you’ll only appear to the administrators, moderators or yourself. You will be counted as a hidden user.'
	),
	array(
		0 => 'Би нууц үгээ санадаггүй!',
		1 => 'Сандрах хэрэггүй! Тэгэхдээ та нууц үгээ шууд хүлээж авах боломжгүй бөгөөд харин таны нууц үг шинэчлэгдэх болно. Үүний тулд та Нэвтрэх хуудсан дахь <em>Би нууц үгээ мартсан</em> холбоосон дээр дарна, тэгээд гарч ирэх зааврыг дагана уу, ингээд л та тун удахгүй буцаад холбогдох болно.'
	),
	array(
		0 => 'Би бvртгvvлсэн гэвч би нэвтэрч чадахгvй байна!',
		1 => 'Юуны өмнө та зөв хэрэглэгчийн нэр болон нууц үг оруулсан эсэхээ шалгана уу! Хэрвээ зөв бол үүнд хоёр шалтгаан байж болно. Хэрэв COPPA боломж дэмжигдсэн үед та бүртгүүлэх үедээ Би 13 наснаас бага настай холбоосыг дарсан бол та хүлээн авсан заавраа дагаж мөрдөх ёстой. Хэрэв тийм биш бол таны бүртгэл идэвжүүлэлтийг шаардаж байгаа юм болов уу? Зарим чуулганууд шинээр бүртгүүлсэн хэрэглэгчидээ анх нэвтрэхээс өмнө бүртгэлээ баталгаажуулахыг шаарддаг. Үүнийг та өөрөө юмуу эсвэл удирдагчид хийдэг. Хэрвээ баталгаажуулах хэрэгтэй бол энэ тухай таныг бүртгүүлж байх үед мэдэгдсэн байх ёстой. Та хэрвээ имэйл хүлээн авсан бол түүн дэх зааврыг дагах хэрэгтэй, хэрэв та ямар ч имэйл хүлээж аваагүй бол та зөв имэйл оруулсан эсэхээ шалгах хэрэгтэй! Идэвхжүүлэлт хэрэглэдэг нэг гол шалтгаан нь дэмий хэрэглэгчид чуулганыг үл мэдэгдэх байдлаар хорлохоос сэргийлэх явдал юм. Хэрвээ таны хэрэглэсэн имэйл хаяг зөв гэдэгт та итгэлтэй байгаа бол энэ талаар чуулганы удирдагчтай холбоо барихыг оролдоно уу!.'
	),
	array(
		0 => 'Би нэлээн хэдийнэ бүртгүүлсэн боловч нэвтэрч чадахгүй байна?!',
		1 => 'The most likely reasons for this are; you entered an incorrect username or password (check the email you were sent when you first registered) or the administrator has deleted your account for some reason. If it is the later case then perhaps you did not post anything? It is usual for boards to periodically remove users who have not posted anything so as to reduce the size of the database. Try registering again and get involved in discussions.'
	),
	array(
		0 => 'COPPA гэж юу вэ?',
		1 => 'COPPA, or Child Online Privacy and Protection Act of 1998 is a law in the United States that requires website that can potentially collect information from minors under the age of 13 to have written parental consent, or some other method of the legal guardians acknowledging they are allowing the collection of personally identifiable information from a minor under the age of 13. If you are unsure if this applies to you as someone trying to register, or to the website you are trying to register on, contact legal counsel for assistance. Please note that the phpBB Team cannot provide legal advice and are not the point of contact for legal concerns of any kind, except as outlined below.',
	),
	array(
		0 => 'Би бүртгүүлж чадагүй байна?',
		1 => 'It is possible the website owner has banned your IP address or disallowed the username you are attempting to register. The website owner could have also disabled registration to prevent new visitors from signing up. Contact the board administrator for assistance.',
	),
	array(
		0 => 'What does the “Delete all board cookies” do?',
		1 => 'Delete all board cookies deletes the cookies created by phpBB3 which keeps you authenticated and logged into the board, and also provides functions such as read tracking if set by the board owner.',
	),
	array(
		0 => '--',
		1 => 'Хэрэглэгчийн мэдээлэл болон тохиргоо'
	),
	array(
		0 => 'Би тохиргоогоо хэрхэн өөрчлөх бэ?',
		1 => 'All your settings (if you are registered) are stored in the database. To alter them click the <em>UCP</em> link (generally shown at the top of pages but this may not be the case). This will allow you to change all your settings and preferences.'
	),
	array(
		0 => 'Цаг буруу байна!',
		1 => 'Though there are rare occurrences of the website’s server having the wrong time, the times are probably correct. However; what you may be seeing are times displayed in a timezone different from the one you are in. If this is the case you should change your profile setting for the timezone to match your particular area, e.g. London, Paris, New York, Sydney, etc. Please note that changing the timezone, like most settings can only be done by registered users. So if you are not registered this is a good time to do so, if you pardon the pun!'
	),
	array(
		0 => 'Би өөрийнхөө цагийн бүсийг өөрчилсөн боловч цаг буруу гарч байна!',
		1 => 'If you are sure you have set the timezone correctly and the time is still different the most likely answer is daylight savings time (or summer time as it is known in the UK and other places). The board is not designed to handle the changeovers between standard and daylight time so during summer months the time may be an hour different from the real local time.'
	),
	array(
		0 => 'Миний хэл жагсаалтанд алга байна!',
		1 => 'The most likely reasons for this are either the administrator did not install your language or someone has not translated this board into your language. Try asking the board administrator if they can install the language pack you need, if it does not exist then please feel free to create a new translation. More information can be found at the phpBB Group website (see link at bottom of pages).'
	),
	array(
		0 => 'Би хэрэглэгчийн нэрний доор хэрхэн зураг харуулах бэ?',
		1 => 'There may be two images below a username when viewing posts. The first is an image associated with your rank, generally these take the form of stars or blocks indicating how many posts you have made or your status on the board. Below this may be a larger image known as an avatar, this is generally unique or personal to each user. It is up to the board administrator to enable avatars and they have a choice over the way in which avatars can be made available. If you are unable to use avatars then this is the decision of the board admin, you should ask them their reasons.'
	),
	array(
		0 => 'Би яаж өөрийнхөө үнэлгээг өөрчилөх бэ?',
		1 => 'In general you cannot directly change the wording of any rank (ranks appear below your username in topics and on your profile depending on the style used). Most boards use ranks to indicate the number of posts you have made and to identify certain users, e.g. moderators and administrators may have a special rank. Please do not abuse the board by posting unnecessarily just to increase your rank, you will probably find the moderator or administrator will simply lower your post count.'
	),
	array(
		0 => 'Аль нэг хэрэглэгчийн Имэйл дээр дарахад нэвтрэхийг шаардаж байна!',
		1 => 'Sorry but only registered users can send email to people via the built-in email form (if the admin has enabled this feature). This is to prevent malicious use of the email system by anonymous users.'
	),
	array(
		0 => '--',
		1 => 'Бичлэгийн тухай'
	),
	array(
		0 => 'Би форумд яаж сэдэв оруулах бэ?',
		1 => 'To post a new topic in one of the forums, click the relevant button on either the forum or topic screens. You may need to register before you can post a message, the facilities available to you are listed at the bottom of the forum and topic screens (the <em>You can post new topics, You can vote in polls, etc.</em> list).'
	),
	array(
		0 => 'Бичлэгийг хэрхэн засаж, устгаж вэ?',
		1 => 'Unless you are the board admin or forum moderator you can only edit or delete your own posts. You can edit a post (sometimes for only a limited time after it was made) by clicking the <em>edit</em> button for the relevant post. If someone has already replied to the post you will find a small piece of text output below the post when you return to the topic, which lists the number of times you edited it along with when. This will not appear if no one has replied, nor will not appear if moderators or administrators edit the post though they may leave a note as to why they’ve edited the post at their own disgression. Please note that normal users cannot delete a post once someone has replied.'
	),
	array(
		0 => 'Би бичлэгтээ гарын vсгээ яаж хавсаргах бэ?',
		1 => 'To add a signature to a post you must first create one, this is done via your profile. Once created you can check the <em>Add Signature</em> box on the posting form to add your signature. You can also add a signature by default to all your posts by checking the appropriate radio box in your profile (you can still prevent a signature being added to individual posts by un-checking the add signature box on the posting form).'
	),
	array(
		0 => 'Санал асуулга яаж үүсгэх бэ?',
		1 => 'Creating a poll is easy, when you post a new topic (or edit the first post of a topic, if you have permission) you should see an <em>Add Poll</em> form below the main posting box (if you cannot see this then you probably do not have rights to create polls). You should enter a title for the poll and then at least two options (to set an option type in the poll question and click the <em>Add option</em> button. You can also set a time limit for the poll, 0 is an infinite poll. There will be a limit to the number of options you can list, this is set by the board administrator.'
	),
	array(
		0 => 'Санал асуулгийг яаж засаж, устгах бэ?',
		1 => 'As with posts, polls can only be edited by the original poster, a moderator or board admin. To edit a poll click the first post in the topic (this always has the poll associated with it). If no one has cast a vote then users can delete the poll or edit any poll option, however if people have already placed votes only moderators or administrators can edit or delete it. This is to prevent people rigging polls by changing options mid-way through a poll'
	),
	array(
		0 => 'Би яагаад аль нэг форум луу хандаж чадахгүй байна вэ?',
		1 => 'Some forums may be limited to certain users or groups. To view, read, post, etc. you may need special authorization, only the forum moderator and board admin can grant this access, you should contact them.'
	),
	array(
		0 => 'Би яагаад санал асуулгад саналаа өгч чадахгүй байна вэ?',
		1 => 'Only registered users can vote in polls (so as to prevent spoofing of results). If you have registered and still cannot vote then you probably do not have appropriate access rights.'
	),
	array(
		0 => 'Би яагаад файл хавсаргаж чадахгүй байна вэ?',
		1 => 'The ability to add attachments can be done on a per forum, per group, or per user basis. The board administrator may not have allowed attachments to be added for the specific forum you are posting in, or perhaps only the administrator group can post attachments. Contact the board administrator if you are unsure about why you are unable to add attachments.'
	),
	array(
		0 => 'Why did I receive a warning?',
		1 => 'Each board administrator has their own set of rules for their site. If you have broken a rule, you may be issued a warning. Please note that this is the board administrator’s decision, and the phpBB Group has nothing to do with the warnings on the given site. Contact the board administrator if you are unsure about why you were issued a warning.'
    ),
	array(
		0 => 'How can I report posts to a moderator?',
		1 => 'If the board administrator has allowed it, go to the post you want to report and you should see a button that is for reporting posts. Clicking this will walk you through the steps necessary to report the post.'
	),
	array(
		0 => 'Бичлэг хийж байхад “Хадгалах” товч яадаг юм бэ?',
		1 => 'This allows you to save messages to be completed and submitted at a later date. To reload them, go to the User Control Panel and follow the self explanatory options there.'
	),
	array(
		0 => 'Яагаад миний бичлэг сайшаагдав?',
		1 => 'The board administrator may decide that the forum you are posting to needs to have posts reviewed first. It is also possible that the administrator has placed you in to a group of users whom he or she feels is a group that needs to have their posts reviewed before being submitted to the site. Please contact the board administrator for further details.'
	),
	array(
		0 => 'How do I bump my topic?',
		1 => 'By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping is disabled. It is also possible to bump the topic simply by replying to it. However, be sure to follow the rules of the site you are visiting.'
	),
	array(
		0 => '--',
		1 => 'Формат болон сэдвийн төрөлүүд'
	),
	array(
		0 => 'BBCode гэж юу вэ?',
		1 => 'BBCode is a special implementation of HTML, whether you can use BBCode is determined by the administrator (you can also disable it on a per post basis from the posting form). BBCode itself is similar in style to HTML, tags are enclosed in square braces [ and ] rather than &lt; and &gt; and it offers greater control over what and how something is displayed. For more information on BBCode see the guide which can be accessed from the posting page.'
	),
	array(
		0 => 'Би HTML ашиглаж чадах уу?',
		1 => 'No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can also be applied using BBCode instead.'
	),
	array(
		0 => 'Инээмсэглэл гэж юу вэ?',
		1 => 'Smilies, or Emoticons are small graphical images which can be used to express some feeling using a short code, e.g. :) means happy, :( means sad. The full list of emoticons can be seen via the posting form. Try not to overuse smilies though, they can quickly render a post unreadable and a moderator may decide to edit them out or remove the post altogether. The board administrator may also have set a limit to the number of such smilies you may use within a post.'
	),
	array(
		0 => 'Би бичлэгтээ зураг оруулж чадах уу?',
		1 => 'Yes, images can be shown in your posts. However; if the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.'
	),
	array(
		0 => 'Нийтийн зарлал гэж юу вэ?',
		1 => 'Global announcements contain important information and you should read them as soon as possible. Global announcements will appear at the top of every forum and also within your User Control Panel. Whether or not you can post a global announcement depends on the permissions required, these are set by the administrator.'
	),
	array(
		0 => 'Зарлал гэж юу вэ?',
		1 => 'Announcements often contain important information for the forum you are currently reading and you should read them as soon as possible. Announcements appear at the top of every page in the forum to which they are posted. As with global announcements, whether or not you can post an announcement depends on the permissions required, these are set by the administrator.'
	),
	array(
		0 => 'Наалттай сэдэв гэж юу вэ?',
		1 => 'Sticky topics appear below any announcements in viewforum and only on the first page. They are often quite important so you should read them where possible. As with announcements the board administrator determines what permissions are required to post sticky topics in each forum.'
	),
	array(
		0 => 'Цоожтой сэдвүүд гэж юу вэ?',
		1 => 'Locked topics are set this way by either the forum moderator or board administrator. You cannot reply to locked topics and any poll it contained is automatically ended. Topics may be locked for many reasons.'
	),
	array(
		0 => 'Сэдвийн icon гэж юу вэ?',
		1 => 'Topic icons are images which can be associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the administrator.'
	),
	array(
		0 => '--',
		1 => 'Хэрэглэгчийн түвшин ба бүлгэмүүд'
	),
	array(
		0 => 'Удирдагчид гэж хэн бэ?',
		1 => 'Удирдагчид нь хамгийн өндөр түвшиний эрх мэдэлтэй хүмүүс бөгөөд тэд форумыг бүхэлд нь удирдан хянах боломжтой. Эдгээр хүмүүс нь форумын бүхий л хэсгүүдийг хянан удирдаж чадна, тухайлбал тэд хандалтын эрхүүдийг олгож, хэрэглэгчдэд хориг тавьж, хэрэглэгчийн бүлгэмүүд болон зохицуулагчдыг үүсгэж чадна. Тэд мөн бүх форумыг зохицуулах боломжтой.'
	),
	array(
		0 => 'Зохицуулагчид гэж хэн бэ?',
		1 => 'Зохицуулагчид нь өдөр тутам хэлэлцүүлэгүүдийн ажиллагааг хянан явуулж байх хүмүүс (эсвэл хэсэг хүмүүсийн бүлэг) юм. Тэд өөрсдийн зохицуулдаг форумын бичлэгүүдийг засах, устгах, цоожлох, нээх мөн сэдвүүдийг хуваах боломжтой. Ерөнхийдөө зохицуулагчид нь хүмүүс ямар нэгэн <em>хориотой сэдэв</em> рүү орох, ёс бус материал оруулахаас хамгаалж байдаг. '
	),
	array(
		0 => 'Бүлгэм гэж юу вэ?',
		1 => 'Хэрэглэгчдийн бүлгэм нь форумын удирдагчид хэрэглэгчдийн бүлэглэж болох нэгэн арга юм. Хэрэглэгч бүр хэд хэдэн бүлгэмд хамаарч болох (энэ ихэнх бусад төрөлийн форумд байдгаас ялгаатай юм) ба бүх бүлгэмүүд тус бүрийн гэсэн хандалтын эрхтэй байж болно. Энэ нь нилээд хэдэн хэрэглэгчийг ямар нэгэн форумын зохицуулагч болгох, эсвэл тэдэнд хувийн форум лүү хандах эрх олгох гэх мэт зүйлийг хийхийг удирдагчид хялбарчилж өгдөг.
'
	),
	array(
		0 => 'Би хэрхэн бүлгэмд нэгдэх вэ?',
		1 => 'Ямар нэгэн бүлгэмд нэгдэхийн тулд хуудасны дээд хэсэгт байх (ямар маяг хэрэглэж байгаас хамаарч өөр байж болно) Бүлгэм холбоосон дээр дарна, ингэснээр та бүх бүлгэмүүдийн жагсаалтыг харах болно. Бүх бүлгэмүүд <em>нээлттэй хандалттай</em> биш бөгөөд зарим нь хаалттай эсвэл нууцлагдмал байж болно. Хэрэв бүлгэм нээллтэй бол та харгалзах товчийг дарсанаар нэгдэх санал илгээж чадна. Бүлгэмийн зохицуулагчид таны хүсэлтийг шийдвэрлэх бөгөөд магадгүй яагаад энэ бүлгэмд нэгдэх гэж буйг тань асууж ч магадгүй. Хэрэв зохицуулагчид таны хүсэлтийг татгалзвал дахин дахин битгий төвөг болно уу, учир нь тэд ямар нэгэн шалтгааны улмаас л татгалзсан байгаа.'
	),
	array(
		0 => 'Би хэрхэн бүлгэмийн тэргүүлэгч болох вэ?',
		1 => 'Бүлгэмүүд нь форумын удирдагчаар үүсгэгддэг бөгөөд, тэд мөн бүлгэмийн тэргүүлэгчийг сонгодог. Та шинэ бүлгэм үүсгэхээр сонирхож байгаа бол таны хамгийн эхэлж холбоо барих ёстой хүн бол форумын удирдагчид бөгөөд та тэдэнд хувийн зурвас бичиж үлдээгээд үзнэ үү!'
	),
	array(
		0 => 'Яагаад зарим бүлгэм өөр өнгөтэй байна вэ?',
		1 => 'It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a “Default Usergroup”?',
		1 => 'If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is “The team” link?',
		1 => 'This page provides you with a list of the board staff, including board administrators and moderators which includes details of which forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'Хувийн зурвас илгээх'
	),
	array(
		0 => 'Би хувийн зурвас явуулж чадахгүй байна!',
		1 => 'There are three reasons for this; you are not registered and/or not logged on, the board administrator has disabled private messaging for the entire board, or the board administrator has prevented you from sending messages. If it is the latter case you should try asking the administrator why.'
	),
	array(
		0 => 'Надад хүсээгүй хувийн зурвас ирж байна!',
		1 => 'You may block a user from sending you private messages by using message rules within your User Control Panel. If you are receiving abusive private messages from someone inform the board admin, they have the power to prevent a user from sending private messages at all.'
	),
	array(
		0 => 'Би энэ форумын хэн нэгнээс спам болон хараалын үгтэй имэйл хүлээж авсан!',
		1 => 'We are sorry to hear that. The email form feature of this board includes safeguards to try and track users who send such posts. You should email the board administrator with a full copy of the email you received, it is very important this include the headers (these list details of the user that sent the email). They can then take action.'
	),
	array(
		0 => '--',
		1 => 'Найзууд ба дайснууд'
	),
	array(
		0 => 'Миний Найзууд ба дайснуудын жагсаалт гэж юу вэ?',
		1 => 'You can use these lists to organise other members of the forum. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list then any posts made by them will be hidden by default.'
	),
	array(
		0 => 'Би яаж Найзууд ба дайснуудын жагсаалтдаа нэмж/устгах вэ?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your friend or foe list. Alternatively from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Форумаас хайх'
	),
	array(
		0 => 'Би яаж форумд хайлт хийх вэ?',
		1 => 'By entering a search term in the search box located on the index view, forum view or topic view. Advanced search can be accessed by clicking the “Search” link which is available on all pages on the forum.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.'
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'Би яаж гишүүдийг хайх вэ?',
		1 => '“Гишүүд” хуудсанд орж “Хэрэглэгч хайх” гэсэн холбоосыг дарна.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the “Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.'
	),
	array(
		0 => '--',
		1 => 'Topic Subscriptions and Bookmarks'
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t alerted when there’s an update, but you can come back to the topic later. Subscribing, however, will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'How do I subscribe to specific forums or topics?',
		1 => 'To subscribe to a specific forum, click the “Subscribe forum” link upon entering the forum. To subscribe to a topic, reply to the topic with the subscribe checkbox checked or click the “Subscribe topic” link within the topic itself.'
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Хавсралтууд'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => 'Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'Би яаж өөрийн хавсралтуудаа хайх вэ?',
		1 => 'To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 Issues'
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => 'This software (in its unmodified form) is produced, released and is copyright <a href="http://www.phpbb.com/">phpBB Group</a>. It is made available under the GNU General Public License and may be freely distributed. See the link for more details.'
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => 'This software was written by and licensed through phpBB Group. If you believe a feature needs to be added, please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the group uses SourceForge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => 'Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Group has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do e-mail phpBB Group <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	)
);

?>
