<?php
/* data.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Shared data for all pages
 */

$websites = array(
  'globaljet' => array(
    'title' => 'Global Jet Partners',
    'link' => array(
      'href' => 'http://globaljetpartners.com/',
      'title' => 'globaljetpartners.com'
    ), // link
    'logo' => 'img/globaljet-logo.png',
    'thumb' => array(
      'full' => array(
        'image' => 'img/globaljet-mainpage-full.jpg',
        'alt' => 'Full-Size Thumbnail'
      ), // full
      'mobile' => array(
        'image' => 'img/globaljet-mainpage-mobile.jpg',
        'alt' => 'Mobile Thumbnail'
      ) // mobile
    ), // thumb
    'desc' => "
      <p>Responsive small-business site built on Wordpress and Boostrap</p>
      
      <ul>
        <li>Wordpress</li>
        <li>Bootstrap
          <ul>
            <li>Responsive</li>
            <li>Mobile-First</li>
          </ul>
        </li>
        <li>JavaScript/jQuery</li>
        <li>PHP</li>
        <li>HTML5/Semantic Markup</li>
        <li>CSS3</li>
        <li>Multilingual</li>
      </ul>",
    'copyright' => array(
      'Content' => '2013-2015 Global Jet Partners, LLC',
      'Code' => '2015 Thaddeus Boyd'
    ) // copyright
  ), // globaljet
  'conference' => array(
    'title' => 'New Media Con',
    'link' => array(
      'href' => '/demos/conference/',
      'title' => 'New Media Con demo site'
    ), // link
    'logo' => 'img/conference-logo.png',
    'thumb' => array(
      'full' => array(
        'image' => 'img/conference-mainpage-full.jpg',
        'alt' => 'Full-Size Thumbnail'
      ), // full
      'mobile' => array(
        'image' => 'img/conference-mainpage-mobile.jpg',
        'alt' => 'Mobile Thumbnail'
      ) // mobile
    ), // thumb
    'desc' => "
      <p>AngularJS demo site featuring responsive multi-column layout and form validation</p>
      
      <ul>
        <li><a href=\"http://foundation.zurb.com/\">Foundation</a> framework
          <ul>
            <li>Multi-column layout</li>
            <li>Responsive Design</li>
          </ul>
        </li>
        <li>JavaScript/AngularJS
          <ul>
            <li>Category visibility toggle</li>
            <li>Modals</li>
            <li>Form validation</li>
          </ul>
        </li>
        <li>JSON</li>
        <li>HTML5/Semantic Markup</li>
        <li>CSS3/Responsive Design</li>
        <li>Sass/SCSS</li>
      </ul>",
    'copyright' => '2015 Thaddeus Boyd'
  ), // conference
  'intel' => array(
    'title' => 'Intel Legal Portal',
    'logo' => 'img/intel-logo.svg',
    'link' => array(
      'href' => '#',
      'title' => 'Intel Legal Portal',
      'data-reveal-id' => 'intel-modal'
    ), // link
    'thumb' => array(
      'full' => array(
        'image' => 'img/intel-demosite-thumb.jpg',
        'alt' => 'Thumbnail'
      ) // full
    ), // thumb
    'desc' => "
      <p>Internal portal site for Intel's legal department, built to comply with Intel's Master Look and Feel Guidelines and codebase</p>
      
      <ul>
        <li>Sharepoint 2013
          <ul>
            <li>Migrated site from Sharepoint 2010</li>
            <li>Redesigned from the ground up</li>
          </ul>
        </li>
        <li>XML/XSL</li>
        <li>Bootstrap</li>
        <li>JavaScript/jQuery</li>
      </ul>
      
      <div class='reveal-modal' id='intel-modal' data-reveal aria-labelledby='Intel Legal Portal' aria-hidden='true' role='dialog'>
        <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
        <h2 class='modalTitle'>Intel Legal Portal</h2>
        <img class='shadow' src='img/intel-demosite-full.png' alt='Intel Legal Portal layout' />
        <p>Screenshot of the layout for the Intel Legal Portal site (proprietary information has been removed)</p>
      </div><!-- #intel-modal -->",
     'copyright' => '2015 Intel Corporation'
  ), // intel
  'md' => array(
    'title' => 'MD Motivational Drink',
    'link' => array(
      'href' => 'http://mdmotivationaldrink.com/',
      'title' => 'mdmotivationaldrink.com'
    ), // link
    'logo' => 'img/md-logo.png',
    'thumb' => array(
      'full' => array(
        'image' => 'img/md-mainpage-full.jpg',
        'alt' => 'Full-Size Thumbnail'
      ), // full
      'mobile' => array(
        'image' => 'img/md-mainpage-mobile.jpg',
        'alt' => 'Mobile Thumbnail'
      ) // mobile
    ), // thumb
    'desc' =>
      "<p>Responsive small-business site featuring CSS3 animations and jQuery styling.</p>
      
      <ul>
        <li>JavaScript/jQuery</li>
        <li>CSS3
          <ul>
            <li>Responsive Design</li>
            <li>Animations</li>
          </ul>
        </li>
      </ul>
      
      <p>Graphic design by <a href=\"http://www.linkedin.com/in/yalikeitmike\">Mike Patten</a>.</p>",
    'copyright' => array(
      'Content' => '2014 MD Motivational Drink',
      'Code' => '2014 Go Daddy'
    ) // copyright
  ), // md
  'integratedaviation' => array(
    'title' => 'Integrated Aviation Group',
    'link' => array(
      'href' => 'http://integratedaviationgroup.com/',
      'title' => 'integratedaviationgroup.com'
    ), // link
    'thumb' => array(
      'main' => array(
        'image' => 'img/integratedaviation-homepage-slide1.jpg',
        'alt' => 'Main Page Thumbnail'
      ), // main
      'form' => array(
        'image' => 'img/integratedaviation-quote.jpg',
        'alt' => 'Quote Form Thumbnail'
      ) // form
    ), // thumb
    'desc' => "
      <p>Responsive small-business site built on Wordpress and Boostrap</p>
      
      <ul>
        <li>Wordpress</li>
        <li>Bootstrap</li>
        <li>PHP</li>
        <li>HTML5/Semantic Markup</li>
        <li>CSS3</li>
      </ul>",
    'copyright' => array(
      'Content' => '2015 Integrated Aviation Group',
      'Code' => '2015 Thaddeus Boyd'
    ) // copyright
  ), // integratedaviation
  'swimit' => array(
    'title' => "Swim'It",
    'link' => array(
      'href' => 'http://myswimit.com/',
      'title' => 'myswimit.com'
    ), // link
    'logo' => 'img/swimit-logo.png',
    'thumb' => array(
      'main' => array(
        'image' => 'img/swimit-mainpage.jpg',
        'alt' => 'Main Page Thumbnail'
      ), // main
      'store' => array(
        'image' => 'img/swimit-store.jpg',
        'alt' => 'Storefront Thumbnail',
        'link' => array (
          'href' => 'https://shop.myswimit.com/',
          'title' => 'shop.myswimit.com'
        ) // link
      ) // store
    ), // thumb
    'desc' => "
      <p>Responsive small-business ecommerce site featuring jQuery and a Nivo slideshow</p>
      
      <ul>
        <li>CSS3/Responsive Design</li>
        <li>JavaScript/jQuery</li>
        <li><a href=\"http://docs.dev7studios.com/jquery-plugins/nivo-slider\">Nivo Slider</a></li>
      </ul>",
    'copyright' => array(
      'Content' => '2014 Lo Drag Inc.',
      'Code' => '2014 Go Daddy'
    ) // copyright
  ) // swimit
); // websites
 
$audiobooks = array(
  'dinner' => array(
    'title' => 'Dinner on a Flying Saucer',
    'author' => 'Dean Wesley Smith',
    'image' => 'img/cover-dinner.jpg',
    'video' => 'http://www.youtube.com/embed/IZ_tSXRJb_g',
    'blurb' =>
      "Sometimes, when a fella gets to help out with fightin' a war between two alien races, it's just not such a good idea to tell your wife. Sometimes the truth just isn't good enough.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_3?asin=B00B9HH01A',
      'Amazon' =>
        'http://www.amazon.com/gp/product/B00BB1RUYQ/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00BB1RUYQ&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=2CSUQLQFD3Y3S445',
      'iTunes' =>
        'https://itunes.apple.com/us/audiobook/dinner-on-flying-saucer-unabridged/id599832717'
    ),
    'copyright' => '2012, 2013 Dean Wesley Smith'
  ), // dinner
  'dinosaurs' => array(
    'title' => 'Dinosaurs in the Home Depot',
    'author' => 'Bret Wellman',
    'image' => 'img/cover-dinosaurs.jpg',
    'video' => 'http://www.youtube.com/embed/Ry8Sbq8LJn4',
    'blurb' =>
      "A man is locked inside the Home Depot as it is over run by dinosaurs. Now he must escape or become dinner.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_1?asin=B00B5W6R3G',
      'Amazon' =>
        'http://www.amazon.com/gp/product/B00B77HDR8/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B77HDR8&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=I63RZ6FP77JIBNAS',
      'iTunes' =>
        'https://itunes.apple.com/us/audiobook/dinosaurs-in-home-depot-unabridged/id597740897'
    ),
    'copyright' => '2012, 2013 Bret Wellman'
  ), // dinosaurs
  'alien' => array(
    'title' => 'Your Average Ordinary Alien',
    'author' => 'Adam Graham',
    'image' => 'img/cover-alien.jpg',
    'video' => 'http://www.youtube.com/embed/y_C2ZIux6lQ',
    'blurb' =>
      "Kirk Picard Skywalker is an unemployed sci-fi fanatic who dreams of being abducted by aliens from outer space. One day his dreams come through and he's horrified to learn that the aliens are all too ordinary.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_1?asin=B00B8VULPE',
      'Amazon' =>
        'http://www.amazon.com/gp/product/B00B9DC08W/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B9DC08W&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=VSANRRELI2NGTTQE',
      'iTunes' => 'https://itunes.apple.com/us/audiobook/your-average-ordinary-alien/id599192781'
    ),
    'copyright' => '2007, 2009, 2013 Adam Graham'
  ) // alien
); // audiobooks

$trademarks = array(
  'Amazon, Amazon.com, Audible, and all related names and logos &reg; and &trade; Amazon.com, Inc.',
  
  'iTunes and all related names and logos &reg; and &trade; Apple Inc.',
  
  'Go Daddy, GoDaddy.com, and all related names and logos &reg; and &trade; Go Daddy',
  
  'Intel and all related names and logos &reg; and &trade; of Intel Corporation'
); // trademarks

$libraries = array(
  'Cutive Mono &copy; 2012 <a href="mailto:vern@newtypography.co.uk">Vernon Adams</a>, with Reserved Font Name "Cutive"',
  
  'Open Sans &copy; 2010-2011 Google Corporation',
  
  '<a href="http://fontawesome.io">Font Awesome</a> &copy; 2012-2015 Dave Gandy',
  
  '<a href="http://foundation.zurb.com/">Foundation</a> &copy; 2014 ZURB',

  '<a href="http://jquery.com/">jQuery</a> &copy; 2005, 2014 jQuery Foundation',
  
  '<a href="http://google.com/recaptcha/">reCAPTCHA</a> &copy; 2007-2014 Google Corporation'
); // libraries
?>