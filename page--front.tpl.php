<?php

/**
 * @file
 * Default theme implementation to display home page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<header class="b-header">
  <div class="b-nav b-nav--header">
    <div class="b-nav__nav-left">
      <a href="#"><img src="<?php echo path_to_theme(); ?>/assets/images/OpenCharity.png" alt="company logo" /></a>
    </div>
    <div class="b-nav__nav-right">
      <ul class="b-nav__nav-elements">
        <li><a href="#">About Open Charity</a></li>
        <li><a href="#">The Blog</a></li>
        <li><a href="#">Join Us</a></li>
      </ul>
    </div>
  </div>
</header>

<?php if($messages): ?>
<div id="messages">
  <div class="section clearfix">
    <?php print $messages; ?>
  </div>
</div>
<?php endif; ?>
<section class="b-hero b-hero--background">
  <div class="b-hero__hero-content">
    <h1>SHARING IDEAS FOR CHARITIES</h1>
    <p>Many charities' goals are similar, as is the functionality we require, but little <br> shared working takes place.</p>
    <p>By working together, driving shared areas of interest and influencing open source developments we can <br> bring efficiencies, improve the digital experience for our users, and have great impact.</p>
    <p>Together we can make a bigger diference.</p>
  </div>
</section>
<section class="b-latest-event b-latest-event--background">
  <div class="latest-event-wrapper">
    <div class="large-8">
      <?php print render($page['event']); ?>
    </div>
    <a class="b-btn-full b-btn-full--register" href="#">REGISTER</a>
  </div>
</section>
<section class="call-to-action-section">
  <h2>GET INVOLVED</h2>
  <div class="b-call-to-action large-3">
    <img class="b-call-to-action__action-image" src="<?php echo path_to_theme(); ?>/assets/images/mettings.png" alt="call to action icon" />
    <h3>WE DO MEETINGS</h3>
    <p>We organize our meetings through the OpenCharity<br>MeetUp group</p>
    <a class="b-btn" href="#">MEETUP GROUP</a>
  </div>
  <div class="b-call-to-action large-3">
    <img class="b-call-to-action__action-image" src="<?php echo path_to_theme(); ?>/assets/images/communicate.png" alt="call to action icon" />
    <h3>WE COMMUNICATE</h3>
    <p>OpenCharity have a slack group for<br>daily communication</p>
    <a class="b-btn" href="#">SLACK GROUP</a>
  </div>
  <div class="b-call-to-action large-3">
    <img class="b-call-to-action__action-image" src="<?php echo path_to_theme(); ?>/assets/images/collaberate.png" alt="call to action icon" />
    <h3>WE COLLABERATE</h3>
    <p>We have a Wiki group set up to share tools<br>and documents</p>
    <a class="b-btn" href="#">WIKI GROUP</a>
  </div>
</section>
<section class="about-section">
  <div class="about-wrapper">
    <h2>OUR MISSION</h2>
    <p>Charities and Partners collaberating and sharing open solutions and ideas to create value in the digital space.</p>
    <h3>If you are a charity or a supplier, we are ready to welcome you.</h3>
    <div class="b-mission-statement b-mission-statement--section">
      <img class="b-mission-statement__icon" src="<?php echo path_to_theme(); ?>/assets/images/bulb.png" alt="mission icon" />
      <h4 class="primary-color">We help charities</h4>
      <p>share knowledge and working practice to make<br>the best technology choices.</p>
    </div>
    <div class="b-mission-statement b-mission-statement--section b-mission-statement--middle">
      <img class="b-mission-statement__icon" src="<?php echo path_to_theme(); ?>/assets/images/people.png" alt="mission icon" />
      <h4 class="primary-color">We help charities</h4>
      <p>share knowledge and working practice to make<br>the best technology choices.</p>
    </div>
    <div class="b-mission-statement b-mission-statement--section">
      <img class="b-mission-statement__icon" src="<?php echo path_to_theme(); ?>/assets/images/thumb.png" alt="mission icon" />
      <h4 class="primary-color">We help charities</h4>
      <p>share knowledge and working practice to make<br>the best technology choices.</p>
    </div>
  </div>
</section>
<div class="divider">
</div>
<section class="member-section">
  <div class="member-wrapper">
    <h2>Our Members</h2>
    <img class="member-logo" src="" alt="member-logo" />
  </div>
</section>
<section class="blog-section">
  <div class="background-one"></div>
  <div class="background-two"></div>
  <div class="blog-wrapper">
    <h2>BLOG</h2>
  </div>
</section>
<footer class="b-footer">
  <div class="b-footer--center">
    <ul class="b-share-buttons b-share-buttons--horizontal">
      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <div class="b-footer--center">
    <p>This site was built as a collaberation between <span class="b-footer__signature">Manifesto Digital</span> and <span class="b-footer__signature">Compucorp</span></p>
  </div>
</footer>