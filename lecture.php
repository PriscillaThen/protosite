<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lecture 5: Responsive Design</title>
</head>
<body>
    <div class="wrapper">
        <section class="container">
            <?php include "includes/header.php";?>
            <main>
                <h1>Lecture 5: <strong>Print Styles & Responsive Design</strong></h1>

                <section class="home">
                    <h2>Styling for Printers</h2>
                    <h4>Applying Printer Styles</h4>
                    <p>When linking to your CSS, using <code>media="print"</code> will allow printer friendly styles to be applied. If you wanted the printer styles to inherit your default styles, use <code>media="all"</code> with the default stylesheets :
                    </p>
                    <p><code>< !-- This will apply both stylesheets to the printout -- ></code>
                        <code>< link rel="stylesheet" href="default_styles.css" media="all" /></code>
                        <code>< link rel="stylesheet" href="print_styles.css" media="print" /></code></p>
                    <h3>Hiding Elements</h3>
                    <p>Hide the elements you don't want printed. This should include any regions of the page that provide no value to a printout. This may or may not include:</p>

                    <p>
                    <ul>
                        <li>navigation links, navigation bars</li>
                        <li>headers</li>
                        <li>footers</li>
                        <li>background images</li>
                        <li>any areas that require user interaction, eg: search fields, login forms, etc</li>
                        <li>side bars, advertisements, banner images</li>
                    </ul>
                    </p>

                    <p>Use <code>display:none;</code> to tell the printer to ignore any of the elements listed in the declaration. Be careful to make sure that none of the elements that are ignored have valuable info in them.
                    </p>

                    <p>
                        <code>
                            header, nav, .site_map_link, #search_form{
                            display: none;
                            }
                        </code>
                    </p>

                    <h3>Restyling Layout</h3>
                    <p>After hiding the content you dont want to be printed, remaining content will either have no style at all, or will inherit the styles of any sheets with "ALL" as the media. For this reason, it is important to explicitly style the remaining divs</p>

                    <p>
                        <code>
                            body, #content, main, footer  {
                            /* floating is not advised for printers */
                            float: none;
                            /* let the printer set margins */
                            width: auto;
                            margin: 0;
                            padding: 0;
                            /* dont display background colors or images */
                            background: none;
                            }
                        </code>
                    </p>

                    <ul>
                        <li>The float property is NOT well supported by printers, using it for print stylesheets is not advised</li>
                        <li>Consider removing any width or padding restrictions, allowing the printer to set the margins for each page</li>
                        <li>If you are using this sheet with another stylesheet that has ALL listed as the value for media, you might want to add !important with each rule, to be sure that there will be no inheritance problems</li>
                        <li>Having a rule like background: none; is good if you use backgrounds, or if you don't. If you do, they're gone, if you don't - consider it future-proofing.</li>
                    </ul>

                    <h3>Printout Page Control</h3>

                    <p>Optional, but useful rules can control where page breaks will or won't appear...</p>

                    <ul>
                        <li>Don't allow a page heading to be at the bottom of a page
                            <code> h2, h2, h4, h5, h6{ page-break-after: avoid; }</code>
                        </li>

                        <li>Ensure important page regions begin on a new page
                            <code>section, article{ page-break-before: always; }</code>
                        </li>
                    </ul>
                </section>

                <section class="media-queries">
                    <h2>Media Queries</h2>
                    <p>Media Queries have become very popular lately with the rise of mobile browsing on both phones, tablets and other devices.
                        You can find a considerable amount of information at the W3C's site for <a href='http://www.w3.org/TR/css3-mediaqueries/'>CSS Media Queries</a>.
                        The advanced media queries discussed here are largely CSS3, so consulting the <a href='http://caniuse.com/css-mediaqueries'>Media Queries
                            Browser Support Chart</a> can help you decide if your user's browser will be able to take advantage.</p>
                    <p>Media Queries are just one part of Responsive Web Design, but they are a very important part. The concept
                        is fairly simple: Use <a href='http://www.w3.org/TR/CSS2/media.html'>@media</a> declarations to target device size and/or orientation using CSS</p>
                    <p>Because you have already created print stylesheets, you've used the concept! It's fundamentally the same idea, but instead of
                        targeting a specific type of media, you will be targeting a specific size.</p>
                    <h3>Syntax</h3>
                    <p>The complete <a href='http://www.w3.org/TR/css3-mediaqueries/'>W3C CSS Media Queries specification</a> includes thorough descriptions of all the options available, including several examples.</p>
                    <h4>Basic Media Query</h4>
                    <p>A basic media query can be used to apply styles based on the type of client. Use it to choose a stylesheet for screen or print.</p>
                    <p>Format:</p>
                    <p><code>@media TYPE{ CSS rules go here }</code></p>

                    <p>Examples:</p>
                    <p><code>/*styles applied to screen devices*/</code></p>
                    <p><code>@media screen{ body{ color:#fff; } }</code></p>

                    <p><code>/*styles applied when printing*/</code></p>
                    <p><code>@media print { nav{ display:none;} }</code></p>

                    <p>Including the keyword 'only' will ensure the query will be hidden from older browsers that dont understand media queries. Learn more about
                        the <a href='http://stackoverflow.com/questions/8549529/what-is-the-difference-between-screen-and-only-screen-in-media-queries'>media query 'only'</a> keyword.</p>
                    <p><code>media only screen{ body{ color:#fff; } }</code></p>
                    <h3>Implementation</h3>
                    <p>When the page is initially rendered, the user agent (browser) will assess the size of the viewport and select CSS based on any media query declarations. This is
                        also true if/as the viewport is resized.</p>
                    <h4>Embedded</h4>
                    <p>Media queries can be specified in the link tag itself, like this: </p>
                    <p><code>< link rel="stylesheet" href="smaller.css" media="only screen and (max-width: 1024px)" /></code></p>
                    <p><code>< link rel="stylesheet" href="larger.css" media="only screen and (min-width: 1024px)" /></code></p>
                    <p><code>< link rel="stylesheet" href="printer.css" media="print" /></code></p>
                </section>
                <section class="responsive">
                    <h2>Responsive Design</h2>
                    <p>The ability to target specific device widths and orientations has made it possible to create "Responsive" web designs. <a href='http://ethanmarcotte.com/'>Ethan Marcotte</a>
                        wrote one of the very first articles on <a href='http://www.alistapart.com/articles/responsive-web-design/'>Responsive Web Design</a> in 2010,
                        and the idea has taken off since then.</p>
                    <p>Using media queries to deliver client specific styles opens up serveral possibilities for the web developer. Some guidelines
                        for taking advantage of the abilities and limitations of client devices:</p>
                    <ul>
                        <li>For small devices, design a one column layout</li>
                        <li>Stack information in order of importance to the user. Start with an optional header, then a vertical navigation, followed by critical content,
                            ordered by importance. In small devices there often isn't enough space to place all crucial content 'above the fold', so don't feel compelled to try</li>
                        <li>Due to the dramatically different capabilities of clients, responsive web design is most effective with content driven sites as opposed to feature
                            driven sites</li>
                        <li>Dont try to design for specific devices: there are too many, and new different sized devices are appearing all the time. Fluid layouts will adapt
                            more effectively to various device widths.</li>
                        <li>Apply media queries at the breakpoints whererever you can see your layout does not display optimally</li>
                    </ul>
                    <h2>Fixed vs Fluid</h2>
                        <p>When looking at responsive designs, you must make the decision to build Fixed or Fluid layouts.</p>
                        <p>Fixed are easier to control as you know the widths and don't have to worry about overflowing elements, items that don't fit from side to side, margin
                            and padding calculations and more.</p>
                        <p>Fluid designs use percentage and em (relative) widths for things that allow you to build a style that will scale to ANY size of user agent</p>
                        <p>When looking at responsive designs, you must make the decision to build Fixed or Fluid layouts.</p>
                        <ul>
                            <li>target / context = result</li>
                            </li>max-width: 100%</li>
                        </ul>
                        <p>The first calculation relates to your measurements for widths, margins, padding and even font-size when building a fluid design.</p>
                        <h3>Font Sizes</h3>
                        <p>For responsive, easy to maintain font sizing, assign a fixed pixel <code>font-size</code> to the <code>body</code>. Then style headings paragraphs etc using the relative size <code>em</code>.</p>
                        <p>For example, if you desire <code>20px</code> headings, and you have set your <code>body</code> element as having a font-size of <code>16px</code>, then we have the two required parts of our calculation:</p>
                        <p>Target (<code>20px</code>) / Context (<code>16px</code>) = <code>1.25em</code></p>
                        <p><code>body{</code></p>
                        <p><code>font-family: Arial, "Helvetica Neue", Sans-serif;</code></p>
                        <p><code>font-size: 16px;</code></p>
                        <p><code>}</code></p>
                        <p><code>/* target / context = result */</code></p>
                        <p><code>/* 20     / 16      = 1.25   */</code></p>
                        <p><code>h1{</code></p>
                        <p><code>/* This will render the font-size to the equivalent of 20px */</code></p>
                        <p><code>font-size: 1.25em; </code></p>
                        <p><code>}</code></p>
                        <p>Take that 1.25 as a relative measurement based on the default 16px setting. Use it now as the following:</p>
                </section>

                <section class="summary">
                    <h2>Summary</h2>
                    <h4>Styling for Print</h4>
                    <ul>
                        <li>use the <code>media="print"</code> attribute or <code>@media print{ }</code> to assign print styles</li>
                        <li>hide navigations, background images, any content that is not useful to a printout</li>
                        <li>dont use 'float' positioning</li>
                        <li>apply the <code>:after</code> pseudoclass to fully-quanlified hyperlinks and print the link address with <code>content: " (URL: ' attr(href) ') ";</code></li>
                    </ul>

                    <h4>Media Queries</h4>
                    <ul>
                        <li>Use media queries to apply breakpoints whenever your layout does not display optimally Format:</li>
                        <code>@media TYPE and (FEATURE: VALUE) { CSS rules go here }</code>
                        <li>W3C CSS Media Queries</li>
                        <li>features</li>
                        <li>media query logic</li>
                        <li>Ensure your media queries identify high-resolution small devices appropriately by adding the following inside the <code>< head></code>:</li>
                        <code><meta name="viewport" content="initial-scale=1.0, width=device-width" /></code>
                    </ul>

                    <h4>Responsive Design</h4>
                    <ul>
                        <li>Build fluid, flexible layouts. For small devices, use a one column stack, with the most important page elements (such as a vertical navigation) top most.</li>
                        <li>Best Practices: <a href="http://www.smashingmagazine.com/responsive-web-design-guidelines-tutorials/" target="_blank">Smashing Magazine Guidelines and Tutorials</a></li>
                    </ul>
                </section>
            </main>
        </section>
        <aside class="sidebar">
            <?php include "includes/asides/lecture.php";?>
            <?php include "includes/asides/agenda.php";?>
            <?php include "includes/asides/references.php";?>
            <?php include "includes/asides/exercises.php";?>
            <?php include "includes/asides/homework.php";?>
        </aside>
    </div>

    <?php include "includes/footer.php";?>
</body>
</html>