<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOOKING UP CUNEIFORM SIGNS</title>
<style>
p { font-size: 3vw; }
label { font-size: 3vw; }
button { font-size: 3vw; }
</style>
  </head>

  <body>
     <?php 
       /*  The following is the standard connection to the database.  */
       require('database.php');
       $conn = getMysqliConnection();

      if (isset($_POST['submit'])): 
      /* This php script is executed after the form at bottom of this page is submitted. */
        
          { $selected = $_POST['signclass'];
            	switch($selected) {		
	case "1": header("Location: fromoatvector.html");	
	break;
	case "2": header("Location: fromnztvector.html");
	break;
	case "3": header("Location: fromobtvector.html");	
	break;
	}}
         
             
      else:  ?>   <!-- This is the end of the php.  What follows is html. The here "else" means the remainder of the page.       
                  Most of what follows is the two .svg files for the two signs.-->
                  

     <div class="bigcontainer">
	<div class="header">  
              <p style = "text-align:center"> LOOKING UP CUNEIFORM SIGNS </p>
              <p style ="text-align:center">Arch Naylor</p>
              <p style ="text-align:center">arch.naylor@gmail.com</p> <br>
	</div>             
             <p style ="text-align:center">The following two signs are illustrations of how this systems works: </p>
              <p style ="text-align:center"> you count <span style=color:red><b>marks</b></span>                     and <span style=color:green><b>connectors</b></span>.</p>
              <p style ="text-align:center; font-size:3vw">Try it. Look up this first sign in the                     Kanesh signs.</p>     
          <div class="container" >
                <div class="exampleSignItem"  >
                     <svg viewbox="-350 0 800 110" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"   >

            <g>
               <g>
                    <title> DV: A down vertical mark </title>
                    <polygon points="0,16, 24, 16, 14, 26, 14, 96, 10, 96, 10, 26" style= "fill:red" />
               </g>

               <g>
                    <title> DV: A down vertical mark </title>
                    <polygon points="88,16,112,16,102,26,102,96,98,96,98,26" style= "fill:red" />
               </g>

               <g>
                    <title> RH: A right horizontal mark </title>
                    <polygon points="16,0,26,10,96,10,96,14,26,14,16,24" style= "fill:red" />
               </g>

               <g>
                     <title> RH: A right horizontal mark </title>
                     <polygon points="16,112, 16, 88, 25,98, 96, 98,96, 102, 25, 102" style= "fill:red" />
               </g>

               <g>
                    <title> RHBB: A right horizontal barbell mark </title>
                    <polygon points="24,42, 34, 52, 86, 52, 86, 56, 34, 56, 24, 66" style= "fill:red" />
                    <polygon points="74, 54, 86, 42, 86, 66" style= "fill:red" />
               </g>

               <g>
                    <title>NWC: A northwest corner connector </title>
                    <circle cx="12" cy="12" r="4" style="fill:green" />
               </g>

               <g>
                    <title>NEC: A northeast corner connector </title>
                    <circle cx="100" cy="12" r="4" style="fill:green" />
               </g>

               <g>
                     <title>SEC: A southeast corner connector </title>
                     <circle cx="100" cy="100" r="4" style="fill:green" />
               </g>

               <g>
                     <title>SWC: A southwest corner connector </title>
                     <circle cx="12" cy="100" r="4" style="fill:green" />
               </g>
           </g>
                            </svg>
                      </div>
                        <p style ="text-align:center; color:red; font-size:2vw">MARKS: DV=2 RH=2 RHBB=1</p>
                         <p style ="text-align:center; color:green; font-size:2vw">CONNECTORS: NEC=1 SEC=1 SWC=1 NWC=1</p>
                </div>
         </div>

<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   
   width="100vw"
   height="15vw"
   viewBox="-5 -5 54 27"
   version="1.1"
   id="svg8"
   inkscape:version="1.0.2-2 (e86c870879, 2021-01-15)"
   sodipodi:docname="labat464.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="5.6"
     inkscape:cx="93.781167"
     inkscape:cy="44.99862"
     inkscape:document-units="vw"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     inkscape:window-width="1755"
     inkscape:window-height="1020"
     inkscape:window-x="38"
     inkscape:window-y="0"
     inkscape:window-maximized="0"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(-128.38906,-165.47769)">
    <g
       id="g91">
      <polygon
         points="14,80 10,80 10,10 0,0 24,0 14,10 "
         style="fill:#ff0000"
         id="polygon22-5"
         transform="matrix(0.17010353,0.00103056,6.3214528e-4,0.20465713,154.41853,165.58522)"
         inkscape:transform-center-x="4.5482058"
         inkscape:transform-center-y="-3.2310022">
        <title
           id="title63">DV Down Vertical Mark</title>
      </polygon>
      <polygon
         points="14,10 14,80 10,80 10,10 0,0 24,0 "
         style="fill:#ff0000"
         id="polygon22"
         transform="matrix(0.00282928,-0.26459542,0.44768009,-3.9244153e-4,129.16149,185.7397)"
         inkscape:transform-center-x="7.0858567"
         inkscape:transform-center-y="7.0418553">
        <title
           id="title59">RH Right Horizontal Mark</title>
      </polygon>
      <polygon
         points="12,24 0,12 12,0 "
         style="fill:#ff0000"
         id="polygon48"
         transform="matrix(0.26458333,0,0,0.26458333,128.38906,170.69405)">
        <title
           id="title69">HE Heel Mark</title>
      </polygon>
      <polygon
         points="0,0 24,0 14,10 14,80 10,80 10,10 "
         style="fill:#ff0000"
         id="polygon82"
         transform="matrix(0.17010353,0.00102947,6.3214528e-4,0.20444117,158.50101,165.61838)"
         inkscape:transform-center-x="4.5482058"
         inkscape:transform-center-y="-3.2276065">
        <title
           id="title65">DV Down Vertical Mark</title>
      </polygon>
      <polygon
         points="24,0 14,10 14,80 10,80 10,10 0,0 "
         style="fill:#ff0000"
         id="polygon84"
         transform="matrix(0.17010353,0.00102857,6.3214528e-4,0.20426268,162.58349,165.64855)"
         inkscape:transform-center-x="4.5482058"
         inkscape:transform-center-y="-3.2247895">
        <title
           id="title67">DV Down Vertical Mark</title>
      </polygon>
      <polygon
         points="10,10 0,0 24,0 14,10 14,80 10,80 "
         style="fill:#ff0000"
         id="polygon86"
         transform="matrix(0.17010353,0.00104121,6.3214528e-4,0.20677281,131.92629,165.47769)"
         inkscape:transform-center-x="4.5482058"
         inkscape:transform-center-y="-3.2644112">
        <title
           id="title61">DV Down Vertical Mark</title>
      </polygon>
      <polygon
         points="14,80 10,80 10,10 0,0 24,0 14,10 "
         style="fill:#ff0000"
         id="polygon88"
         transform="matrix(0.0019798,-0.1700933,0.13143273,3.8623874e-4,145.8691,182.16677)"
         inkscape:transform-center-x="2.1165404"
         inkscape:transform-center-y="4.4912842">
        <title
           id="title57">RH Right Horizontal Mark</title>
      </polygon>
      <polygon
         points="10,80 10,10 0,0 24,0 14,10 14,80 "
         style="fill:#ff0000"
         id="polygon90"
         transform="matrix(0.0019798,-0.1700933,0.13143273,3.8623874e-4,146.01166,169.92005)"
         inkscape:transform-center-x="2.1165404"
         inkscape:transform-center-y="4.4912842">
        <title
           id="title51">RH Right Horizontal Mark</title>
      </polygon>
      <polygon
         points="10,10 0,0 24,0 14,10 14,80 10,80 "
         style="fill:#ff0000"
         id="polygon92"
         transform="matrix(0.0019798,-0.1700933,0.13143273,3.8623874e-4,145.91662,178.08453)"
         inkscape:transform-center-x="2.1165404"
         inkscape:transform-center-y="4.4912842">
        <title
           id="title55">RH Right Horizontal Mark</title>
      </polygon>
      <polygon
         points="10,10 0,0 24,0 14,10 14,80 10,80 "
         style="fill:#ff0000"
         id="polygon94"
         transform="matrix(0.0019798,-0.1700933,0.13143273,3.8623874e-4,145.96414,174.00229)"
         inkscape:transform-center-x="2.1165404"
         inkscape:transform-center-y="4.4912842">
        <title
           id="title53">RH Right Horizontal Mark</title>
      </polygon>
    </g>
    <ellipse
       style="fill:#00ff00;stroke-width:0.264583"
       id="path78"
       cx="173.76982"
       cy="185.22694"
       rx="0.023623513"
       ry="0.1889881" />
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="path62"
       cx="156.41144"
       cy="179.81636"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title96">R2T Right 2 Touch Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse64"
       cx="156.554"
       cy="167.56964"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title82">NEC Northeast Corner Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse66"
       cx="156.52467"
       cy="183.14807"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title80">B2T Bottom 2 Touch Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse70"
       cx="165.0042"
       cy="183.06235"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title72">SEC South East Corner Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse74"
       cx="160.63515"
       cy="183.00635"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title76">B2T Bottom 2 Touch Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse84"
       cx="133.66658"
       cy="183.08983"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title86">SWC Southwest Corner Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse88"
       cx="156.50647"
       cy="171.65189"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title92">R2T Right 2 Touch Connector</title>
    </ellipse>
    <ellipse
       style="fill:#00ff00;fill-rule:evenodd;stroke-width:0.264583"
       id="ellipse90"
       cx="156.45895"
       cy="175.73412"
       rx="0.92131698"
       ry="0.80319941">
      <title
         id="title94">R2T Right 2 Touch Connector</title>
    </ellipse>
  </g>
</svg>

<p style ="text-align:center; color:red; font-size:2vw">MARKS: DV=4 RH=5 HE=1</p>
<p style ="text-align:center; color:green; font-size:2vw">CONNECTORS: R2T=3 B2T=2 NEC=1 SEC=1 SWC=1</p>

        <div style="align-text:center">
            <form action="" method="POST">
                   <p style= "text-align:center ;">To look up a sign select a class of signs below, click on Submit, </p> 
<p style="text-align: center;">and then enter your counts on the resulting new page.</p>
               <div style="text-align:center">
                <input type="radio" id="contactChoice1" name="signclass" value="1" checked>
                <label for="contactChoice1">Kanesh, Old Assyrian</label><br>

                <input type="radio" id="contactChoice2"  name="signclass" value="2">
                <label for="contactChoice2">Nuzi, Middle Babylonian</label><br>

                <input type="radio" id="contactChoice3" name="signclass" value="3">
                <label for="contactChoice3">Old Babylonian</label><br><br>
              </div>
         </div>
<div style="text-align:center">
    <button type="submit" name="submit" >Submit</button>
  </div>
</form>
 <?php  endif;  ?>
  </body>
  </html>
