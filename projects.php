<!DOCTYPE html>
<html>
  <head>
    <title>ZION ROBOTICS- Robotics Development Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--script src="blockly_compressed.js"></script>
    <script src="blocks_compressed.js"></script>

    <script src="javascript_compressed.js"></script>
    <script src="python_compressed.js"></script>

    <script src="msg/js/en.js"></script-->
    
    <script src="js/jquery.min.js"></script>
    
    <!-- Load Blockly core -->
<script src="https://unpkg.com/blockly/blockly_compressed.js"></script>
<!-- Load the default blocks -->
<script src="https://unpkg.com/blockly/blocks_compressed.js"></script>
<!-- Load a generator -->
<script src="https://unpkg.com/blockly/javascript_compressed.js"></script>
<!-- Load a message file -->
<script src="https://unpkg.com/blockly/msg/en.js"></script>
    
    <!-- botstrap: CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
    
      #file-content{
            width:90vw;
            height: 70vh;
            border:1px solid blue;
            
        }
        
    .bt-stuff-0{
        position:absolute;
        right:0;
        top:0;
    }
    
        
    </style>
    <!--script src="custom_dialog.js"></script-->
    <script type="text/javascript">
    (function(f,b){if(!b.__SV){var e,g,i,h;window.mixpanel=b;b._i=[];b.init=function(e,f,c){function g(a,d){var b=d.split(".");2==b.length&&(a=a[b[0]],d=b[1]);a[d]=function(){a.push([d].concat(Array.prototype.slice.call(arguments,0)))}}var a=b;"undefined"!==typeof c?a=b[c]=[]:c="mixpanel";a.people=a.people||[];a.toString=function(a){var d="mixpanel";"mixpanel"!==c&&(d+="."+c);a||(d+=" (stub)");return d};a.people.toString=function(){return a.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
    for(h=0;h<i.length;h++)g(a,i[h]);var j="set set_once union unset remove delete".split(" ");a.get_group=function(){function b(c){d[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));a.push([e,call2])}}for(var d={},e=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<j.length;c++)b(j[c]);return d};b._i.push([e,f,c])};b.__SV=1.2;e=f.createElement("script");e.type="text/javascript";e.async=!0;e.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
    MIXPANEL_CUSTOM_LIB_URL:"file:"===f.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";g=f.getElementsByTagName("script")[0];g.parentNode.insertBefore(e,g)}})(document,window.mixpanel||[]);
    
    // Enabling the debug mode flag is useful during implementation,
    // but it's recommended you remove it for production
    mixpanel.init('2ced9061a73fba130648c321d234a4be', {debug: true}); 
    mixpanel.track('Landed on Ayo Coding Page');
    </script>
    
          <style>
          .blocklyText.blocklyCheckbox{
              fill: red !important;
          }
          #demo-board{
                position: relative;
                top:10vh;
                background: purple;
                padding: 20px;
                width:80vh;
                border-radius: 20px;
                margin: 5vh auto;
          }
          
          #demo-matrix-screen{
              border:2px solid purple;
              background: grey;
              padding:3px;
            width: 45vh;
            margin:auto;
            text-align:center;
            border-radius: 15px;
          }
          
          .matrix-led{
              display:inline-block;
              border:1px solid white;
              height:4vh;
              width: 4vh;
              margin:0.2vh;
            background:rgba(4,4,4,0);
              border-radius: 50%;
          }
          .matrix-led.on{
              background:red;
          }
         
         #demo-button-1, #demo-button-2{
              user-select: none; /* standard */
              -moz-user-select: none; /* firefox specific */
              -webkit-user-select: none; /* Chrome, Opera and Safari*/
              -ms-user-select: none; /* IE, ms-edge */
         }
         
         .demo-rgb{
             display:inline-block;
             border:2px solid black;
              display:inline-block;
              border:1px solid black;
              height:3vh;
              width: 3vh;
              margin:0.11vh;
              border-radius: 50%;
         }
         
         #demo-rgb-2{
             float:right;
         }
         #demo-button-2{
             float:right;
         }
         
          @media only screen and (max-width: 991px) { 
        .blocklyText, .blocklyHtmlInput, .blocklyTreeLabel {
          /*font-family: 'Kanit', sans-serif !important;*/
          
        }
        .blocklyWidgetDiv .goog-menuitem.goog-option, .blocklyWidgetDiv .goog-menuitem-content{
            font-size: 1.2em !important;
        }
        .wawa{
            font-size: 1.2em;
        }
        body{
            padding-left: 5px;
            position: fixed;
            left:0;
            top:0;
            width: 100vw;
        }
        
        .blocklyTreeLabel {
          //font-size: 1.5em !important;
        }
        
        .blocklyTreeRow {
          height: 1em !important;
          margin-top: 0.25em !important;
        }
        
        .zz .btn{
            font-size: 1.0em;
        }
        
        .zz{
            font-size: 1em;
        }
        
        #demo-board{
            scale:1;
        }
        
        #demo-board{
                position: relative;
                top:5vw;
                background: purple;
                padding: 20px;
                width:80vw;
                border-radius: 20px;
                margin: 5vw auto;
          }
          
          #demo-matrix-screen{
              border:2px solid purple;
              background: grey;
              padding:3px;
            width: 60vw;
            margin:auto;
            text-align:center;
            border-radius: 15px;
          }
          
          .matrix-led{
              display:inline-block;
              border:1px solid white;
              height:5.8vw;
              width: 5.8vw;
              margin:0.1vw;
            background:rgba(4,4,4,0);
              border-radius: 50%;
          }
          .matrix-led.on{
              background:red;
          }
         
         #demo-button-1, #demo-button-2{
              user-select: none; /* standard */
              -moz-user-select: none; /* firefox specific */
              -webkit-user-select: none; /* Chrome, Opera and Safari*/
              -ms-user-select: none; /* IE, ms-edge */
         }
         
         .demo-rgb{
             display:inline-block;
             border:2px solid black;
              display:inline-block;
              border:1px solid black;
              height:6vw;
              width: 6vw;
              margin:3vw;
              border-radius: 50%;
         }
         
         #demo-rgb-2{
             float:right;
         }
         #demo-button-2{
             float:right;
         }
    }
   
      </style>
  </head>
  <body>

    <div class="container-fluid"> 
      <div hidden class="template">
          <div class="matrix-led">
              
          </div>
          
      </div>
     
     <!--tabs-->
    <ul class="nav nav-tabs zz" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="blockly-tab" data-bs-toggle="tab" data-bs-target="#blockly-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Blockly</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="python-tab" data-bs-toggle="tab" data-bs-target="#python-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Python</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="demo-tab" data-bs-toggle="tab" data-bs-target="#demo-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Demo</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Settings</button>
      </li>
      
      <li><button id="scan-ble-btn" class="btn btn-primary">BT <span id = "ble-status" >DISCONNECTED</span> </button></li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="blockly-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
           <div
              id="blockly-div"
              style="
                height: 70vh;
                width: 100%;
                border: 2px solid black;
                background: white;
              "
            ></div>
            <br>
            <!-- end block area-->
             <div class="row mb-5 text-center zz">
                <div class="col-4" >
                    <button id="runBtn" onclick="runCode()"  class="btn btn-success" >Run</button>
                </div>
                 <div class="col-4">
                    <button id="pauseBtn" onclick="pauseCode()"   class="btn btn-warning" >Pause</button>
                </div>
                 <div class="col-4">
                    <button id="stopBtn" onclick="stopCode()"   class="btn btn-danger" >Stop</button>
                </div>
                
              <button id="run-file-btn" style="display:none">Run File</button>
            </div>
      </div>
      <div class="tab-pane fade" id="python-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div id="o-file">
            <input type="text" id = "file-name" placeholder="file name"><br><br>
             <textarea name="file" id="file-content" placeholder="file content"></textarea><br>
             <button id="file-send">Upload File</button>
        </div>
      </div>
      <div class="tab-pane fade" id="demo-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
          <div id="demo-board">
              <div id="demo-matrix-screen">
                  
              </div>
            
            <div id="demo-rgb-1" class="demo-rgb"></div>  <div id="demo-rgb-2" class="demo-rgb"></div> <br>

              <div id="demo-button-1" class="btn btn-primary">button 1</div>  <div id="demo-button-2" class="btn btn-primary">button 2</div>
          </div> <!--demo board-->
        
      </div>
      <div class="tab-pane fade wawa" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
          <form>
              <label for="pn" class="form-label">Project Name</label>
              <br>
                <input name="pn" class="form-control" id="project-name" placeholder="Project Name">
          </form>
          
      </div>
        
    </div><!--tab content-->
      
   
    <br />
    <div class=" mb-5 text-center zz bt-stuff">
       
    </div>
  
    
    
    
    <div  hidden>
        
    
        <div id="o-js">
          <textarea name="code" id="op-js"> </textarea>
        </div>
        <div id="o-py" style="display:none">
          <textarea name="code" id="op-py" disable> </textarea>
        </div>
        <div>
            <input type="text" id = "bt-name">
        </div>
   
    </div>
    <script>
      let ipc = window.ipcRenderer;
    </script>

    <!--- for js live processing using an interpreter------>
    <script src="js/acorn_interpreter.js"></script>

    <xml
      xmlns="https://developers.google.com/blockly/xml"
      id="toolbox"
      style="display: none"
    >
      <category name="Input-Output">
        <block type="ayo_rgb">
          <field name="led_number">1</field>
          <field name="led_colour">#ff0000</field>
        </block>
        <block type="ayo_tone">
          <field name="tone_freq">50</field>
        </block>
        <block type="ayo_beep">
          <field name="beep_status">on</field>
        </block>
        <block type="ayo_button">
          <field name="button_number">1</field>
        </block>
        <block type="ayo_ldr">
          <field name="ldr_number">1</field>
        </block>
        <block type="ayo_analog_read">
          <field name="port_number">1</field>
        </block>
        <block type="io_get_distance">
          <field name="pin name">1</field>
        </block>
      </category>
      <category name="Display">
        <block type="ayo_display_text">
          <field name="text_value">text</field>
        </block>
        <block type="ayo_double_digit">
        </block>
        <block type="ayo_display_grid">
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
          <field name="box">TRUE</field>
        </block>
      </category>
      <category name="Motion">
        <block type="ayo_motor">
          <field name="motor_number">1</field>
          <field name="motor_direction">f</field>
        </block>
        <block type="ayo_drive">
          <field name="drive_direction">fwd</field>
          <field name="drive_speed">0</field>
        </block>
        <block type="ayo_stop_motor">
          <field name="motor_number">3</field>
        </block>
        <block type="ayo_servo">
          <field name="port_name">3</field>
          <field name="servo_angle">90</field>
        </block>
      </category>
      <sep></sep>
      <category name="Logic" colour="#5b80a5">
        <block type="controls_if"></block>
        <block type="logic_compare">
          <field name="OP">EQ</field>
        </block>
        <block type="logic_operation">
          <field name="OP">AND</field>
        </block>
        <block type="logic_negate"></block>
        <block type="logic_boolean">
          <field name="BOOL">TRUE</field>
        </block>
        <block type="logic_null"></block>
        <block type="logic_ternary"></block>
      </category>
      <category name="Control" colour="#5ba55b">
        <block type="start_block"></block>
        <block type="ayo_forever"></block>
        <block type="ayo_key_event"></block>
        <block type="controls_repeat_ext">
          <value name="TIMES">
            <shadow type="math_number">
              <field name="NUM">10</field>
            </shadow>
          </value>
        </block>
        <block type="controls_for">
            <field name="VAR" id="S)qc.AvZ?WrFBe-bC$.S">i</field>
            <value name="FROM">
            <shadow type="math_number">
            <field name="NUM">1</field>
            </shadow>
            </value>
            <value name="TO">
            <shadow type="math_number">
            <field name="NUM">10</field>
            </shadow>
            </value>
            <value name="BY">
            <shadow type="math_number">
            <field name="NUM">1</field>
            </shadow>
            </value>
            </block>
        <block type="controls_whileUntil">
          <field name="MODE">WHILE</field>
        </block>
        <block type="wait">
          <field name="NAME">1</field>
        </block>
        <block type="controls_if"></block>
      </category>
      <category name="Math" colour="#5b67a5">
        <block type="math_number">
          <field name="NUM">0</field>
        </block>
        <block type="math_arithmetic">
          <field name="OP">ADD</field>
          <value name="A">
            <shadow type="math_number">
              <field name="NUM">1</field>
            </shadow>
          </value>
          <value name="B">
            <shadow type="math_number">
              <field name="NUM">1</field>
            </shadow>
          </value>
        </block>
        <block type="math_single">
          <field name="OP">ROOT</field>
          <value name="NUM">
            <shadow type="math_number">
              <field name="NUM">9</field>
            </shadow>
          </value>
        </block>
        <block type="math_trig">
          <field name="OP">SIN</field>
          <value name="NUM">
            <shadow type="math_number">
              <field name="NUM">45</field>
            </shadow>
          </value>
        </block>
        <block type="math_constant">
          <field name="CONSTANT">PI</field>
        </block>
        <block type="math_number_property">
          <mutation divisor_input="false"></mutation>
          <field name="PROPERTY">EVEN</field>
          <value name="NUMBER_TO_CHECK">
            <shadow type="math_number">
              <field name="NUM">0</field>
            </shadow>
          </value>
        </block>
        <block type="math_round">
          <field name="OP">ROUND</field>
          <value name="NUM">
            <shadow type="math_number">
              <field name="NUM">3.1</field>
            </shadow>
          </value>
        </block>
        <block type="math_on_list">
          <mutation op="SUM"></mutation>
          <field name="OP">SUM</field>
        </block>
        <block type="math_modulo">
          <value name="DIVIDEND">
            <shadow type="math_number">
              <field name="NUM">64</field>
            </shadow>
          </value>
          <value name="DIVISOR">
            <shadow type="math_number">
              <field name="NUM">10</field>
            </shadow>
          </value>
        </block>
        <block type="math_constrain">
          <value name="VALUE">
            <shadow type="math_number">
              <field name="NUM">50</field>
            </shadow>
          </value>
          <value name="LOW">
            <shadow type="math_number">
              <field name="NUM">1</field>
            </shadow>
          </value>
          <value name="HIGH">
            <shadow type="math_number">
              <field name="NUM">100</field>
            </shadow>
          </value>
        </block>
        <block type="math_random_int">
          <value name="FROM">
            <shadow type="math_number">
              <field name="NUM">1</field>
            </shadow>
          </value>
          <value name="TO">
            <shadow type="math_number">
              <field name="NUM">100</field>
            </shadow>
          </value>
        </block>
        <block type="math_random_float"></block>
      </category>
      <category name="Text" colour="#5ba58c">
        <block type="text">
          <field name="TEXT"></field>
        </block>
        <block type="text_join">
          <mutation items="2"></mutation>
        </block>
        <block type="text_append">
          <field name="VAR" id="6bW.~.n8;[R5uU`fGDOs">item</field>
          <value name="TEXT">
            <shadow type="text">
              <field name="TEXT"></field>
            </shadow>
          </value>
        </block>
        <block type="text_length">
          <value name="VALUE">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
        <block type="text_isEmpty">
          <value name="VALUE">
            <shadow type="text">
              <field name="TEXT"></field>
            </shadow>
          </value>
        </block>
        <block type="text_indexOf">
          <field name="END">FIRST</field>
          <value name="VALUE">
            <block type="variables_get">
              <field name="VAR" id="crN^N_{?rUn2;TC1tr;1">text</field>
            </block>
          </value>
          <value name="FIND">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
        <block type="text_charAt">
          <mutation at="true"></mutation>
          <field name="WHERE">FROM_START</field>
          <value name="VALUE">
            <block type="variables_get">
              <field name="VAR" id="crN^N_{?rUn2;TC1tr;1">text</field>
            </block>
          </value>
        </block>
        <block type="text_getSubstring">
          <mutation at1="true" at2="true"></mutation>
          <field name="WHERE1">FROM_START</field>
          <field name="WHERE2">FROM_START</field>
          <value name="STRING">
            <block type="variables_get">
              <field name="VAR" id="crN^N_{?rUn2;TC1tr;1">text</field>
            </block>
          </value>
        </block>
        <block type="text_changeCase">
          <field name="CASE">UPPERCASE</field>
          <value name="TEXT">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
        <block type="text_trim">
          <field name="MODE">BOTH</field>
          <value name="TEXT">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
        <block type="text_print">
          <value name="TEXT">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
        <block type="text_prompt_ext">
          <mutation type="TEXT"></mutation>
          <field name="TYPE">TEXT</field>
          <value name="TEXT">
            <shadow type="text">
              <field name="TEXT">abc</field>
            </shadow>
          </value>
        </block>
      </category>
      <category name="Colour" colour="#a5745b">
        <block type="colour_picker">
          <field name="COLOUR">#ff0000</field>
        </block>
        <block type="colour_random"></block>
        <block type="colour_rgb">
          <value name="RED">
            <shadow type="math_number">
              <field name="NUM">100</field>
            </shadow>
          </value>
          <value name="GREEN">
            <shadow type="math_number">
              <field name="NUM">50</field>
            </shadow>
          </value>
          <value name="BLUE">
            <shadow type="math_number">
              <field name="NUM">0</field>
            </shadow>
          </value>
        </block>
        <block type="colour_blend">
          <value name="COLOUR1">
            <shadow type="colour_picker">
              <field name="COLOUR">#ff0000</field>
            </shadow>
          </value>
          <value name="COLOUR2">
            <shadow type="colour_picker">
              <field name="COLOUR">#3333ff</field>
            </shadow>
          </value>
          <value name="RATIO">
            <shadow type="math_number">
              <field name="NUM">0.5</field>
            </shadow>
          </value>
        </block>
      </category>
      <sep></sep>
      <category name="Lists" colour="#745ba5">
        <block type="lists_create_with">
          <mutation items="0"></mutation>
        </block>
        <block type="lists_create_with">
          <mutation items="3"></mutation>
        </block>
        <block type="lists_repeat">
          <value name="NUM">
            <shadow type="math_number">
              <field name="NUM">5</field>
            </shadow>
          </value>
        </block>
        <block type="lists_length"></block>
        <block type="lists_isEmpty"></block>
        <block type="lists_indexOf">
          <field name="END">FIRST</field>
          <value name="VALUE">
            <block type="variables_get">
              <field name="VAR" id="8nIf,A2UQS@QuZGS4VH`">list</field>
            </block>
          </value>
        </block>
        <block type="lists_getIndex">
          <mutation statement="false" at="true"></mutation>
          <field name="MODE">GET</field>
          <field name="WHERE">FROM_START</field>
          <value name="VALUE">
            <block type="variables_get">
              <field name="VAR" id="8nIf,A2UQS@QuZGS4VH`">list</field>
            </block>
          </value>
        </block>
        <block type="lists_setIndex">
          <mutation at="true"></mutation>
          <field name="MODE">SET</field>
          <field name="WHERE">FROM_START</field>
          <value name="LIST">
            <block type="variables_get">
              <field name="VAR" id="8nIf,A2UQS@QuZGS4VH`">list</field>
            </block>
          </value>
        </block>
        <block type="lists_getSublist">
          <mutation at1="true" at2="true"></mutation>
          <field name="WHERE1">FROM_START</field>
          <field name="WHERE2">FROM_START</field>
          <value name="LIST">
            <block type="variables_get">
              <field name="VAR" id="8nIf,A2UQS@QuZGS4VH`">list</field>
            </block>
          </value>
        </block>
        <block type="lists_split">
          <mutation mode="SPLIT"></mutation>
          <field name="MODE">SPLIT</field>
          <value name="DELIM">
            <shadow type="text">
              <field name="TEXT">,</field>
            </shadow>
          </value>
        </block>
        <block type="lists_sort">
          <field name="TYPE">NUMERIC</field>
          <field name="DIRECTION">1</field>
        </block>
      </category>
      <category name="Variables" colour="#a55b80" custom="VARIABLE"></category>
      <category name="Functions" colour="#995ba5" custom="PROCEDURE"></category>
    </xml>

    <xml
      xmlns="https://developers.google.com/blockly/xml"
      id="freshWorkspaceBlocks"
      style="display: none"
    >
      <block
        type="start_block"
        id="Eh|_K?8=dspdEFDUp~|J"
        x="113"
        y="88"
      ></block>
    </xml>
    
    <script>
       let inMode; //the input modes of some pins or ports, so we know
      //which inputs to poll with analogRead and which to poll as distance
      function setInMode(port, val){
		          inMode[port]= val;}
      //set the inMode
    </script>

    <script src="zi def.js?ver=<?php echo time(); ?>"></script>
    <script src="ziro-gen-for-js.js?ver=<?php echo time();?>"></script>
    

    <script>
      //custom blocks
      /* TODO: Change toolbox XML ID if necessary. Can export toolbox XML from Workspace Factory. */
      var toolbox = document.getElementById("toolbox");
        let initScale, holay;
        if(window.screen.width <= 991){
             initScale = 1; //mobile and tablet
             holay = true
        }
        else {initScale = 1;
            holay = false;
        }
        
      var options = {
        toolbox: toolbox,
        collapse: true,
        comments: true,
        disable: true,
        maxBlocks: Infinity,
        trashcan: true,
        horizontalLayout: holay,
        toolboxPosition: "start",
        css: true,
        media: "blockly_media/",
        rtl: false,
        scrollbars: true,
        sounds: true,
        oneBasedIndex: true,
        renderer: 'zelos',
        zoom : {
    		controls : true, 
    		wheel : true, 
    		startScale : initScale, 
    		maxScale : 10, 
    		minScale : 0.3, 
    		scaleSpeed : 1.2
    	    }
      };
        
        Blockly.FieldCheckbox.CHECK_CHAR = '\u2b24'; 
      /* Inject your workspace */
      var workspace = Blockly.inject("blockly-div", options);

      /* Load Workspace Blocks from XML to workspace. Remove all code below if no blocks to load */

      /* TODO: Change workspace blocks XML ID if necessary. Can export workspace blocks XML from Workspace Factory. */
      
      let storageId = <?php echo $_GET['id']?>;
      
      function prepWorkspace() {
        //Blockly.mainWorkspace.clear();
        workspace.clear();
        //check if something was saved
        if(localStorage.getItem("workspace-"+storageId)){
            loadWorkspace();
        }//end if current-xml
        else{
            //start fresh
             var workspaceBlocks = document.getElementById("freshWorkspaceBlocks");
            /* Load blocks to workspace. */
            Blockly.Xml.domToWorkspace(workspaceBlocks, workspace);
        }//end else
      }//end prep

    

      function myUpdateFunction(event) {
        //initialize inMode to a new object
        inMode = Object.create(null);
        //convert the workspace to javascript code
        var jsCode = Blockly.JavaScript.workspaceToCode(workspace);
        //get python code
        //var pyCode = Blockly.Python.workspaceToCode(workspace);
        //put the code
        document.getElementById("op-js").innerHTML = jsCode;
        //document.getElementById("op-py").innerHTML = pyCode;
        storeWorkspace();//save workspace
      } //end update myUpdateFunction
      //add change listener for every time the workspace has a change
      workspace.addChangeListener(myUpdateFunction);
    </script>

    <!-- Insert this line above script imports  -->
    <script>
      if (typeof module === "object") {
        window.module = module;
        module = undefined;
      }
    </script>



    <!-- Insert this line after script imports -->
    <script>
      if (window.module) module = window.module;
    </script>

    <script>
      $(document).ready(function () {
        prepWorkspace(); //fresh
        //$("#runBtn").prop("disabled", true); //disable run botton
        $("#stopBtn").prop("disabled", true);// disable
        $("#pauseBtn").prop("disabled", true);// disable
      });

      let selPort = $("#select-port"); //set port selector select
      $("#get-port-btn").click(function () {
        selPort.empty(); //empty it
        selPort.append(new Option("choose", "nil")); //put pace holder

        ipc.send("getports", "");
        ipc.send("gethids", "");
        ipc.send("getblue", "");
      });

      document
        .querySelector("#scan-ble-btn")
        .addEventListener("click", connect_ble);
      /*
			$('#scan-ble-btn').click(function (){
				
				connect_ble();
			});
			*/
      let myDevice; //the device
      let SEND_SERVICE = "f325d40e-fdf4-4834-ba07-e6877d3c7ab2";

      let SEND_SERVICE_CHARACTERISTIC = "b6113161-27f6-4b00-80e2-352fac6426a0";
      let RES_SERVICE_CHARACTERISTIC = "19c880a9-5729-4cef-9282-c439b92ed08f";

      let toggleChar; //toggle characteristic
      let notifyChar; //for receiving notifications

      let toggleButton;
      let bleConnected = false;

      function connect_ble() {
        console.log("scanning");
        navigator.bluetooth
          .requestDevice({
            acceptAllDevices: true,
            optionalServices: [SEND_SERVICE],
          })
          .then((device) => {
            myDevice = device;
            myDevice.ongattserverdisconnected = bleDisconnected;
            console.log(device);
            $("#bt-name").val(device.name);//set the device name
           
            return device.gatt.connect();
          })
          .then((server) => server.getPrimaryService(SEND_SERVICE))
          .then((service) => service.getCharacteristics())
          .then((chas) => {
            chas.forEach((ch) => {
              console.log(ch);

              if (ch.uuid == SEND_SERVICE_CHARACTERISTIC) {
                console.log("sender seen");
                toggleChar = ch; //set the one for sending
              } else if (ch.uuid == RES_SERVICE_CHARACTERISTIC) {
                console.log("receiver seen");
                notifyChar = ch; //set the one for receiv
                //start notifications
                notifyChar.startNotifications().then((note) => {
                  //the notification
                  notifyChar.addEventListener(
                    "characteristicvaluechanged",
                    handleNotif
                  );
                });
              } //end else if
            }); //end foreach
           $("#runBtn").prop("disabled", false); //can now run
           $("#ble-status").text("CONNECTED");
           bleConnected = true;
          })
          .catch((error) => {
            console.log("an error");
            console.log(error.message);
          });
      } //end connect

      function doSend(msg) {
        /* This function is called when user clicks on an effect radio button. */
        console.log("doSend " + msg);
        //send toggle message
        if(bleConnected){
             var enc = new TextEncoder(); // always utf-8
        let val = enc.encode(msg);
        toggleChar.writeValueWithResponse(val).then(function (res) {
         // console.log(toggleChar);
        });
        }//end if bleConnected
        else{
            handleDemo(msg);
        }
      }//end doSend
      
      let btns = [false, false];
      let prevBtns = [false, false];///previous buttons
      
      let analog = [0,0,2,2,0]; //the 5 analog port
      
      function handleNotif() {
        const characteristic = event.target;
        let val = new TextDecoder().decode(characteristic.value); // always utf-8
        console.log(val);
        let msg = val.split(" ");
        let comm = msg[0];
        //console.log("cm", comm);
        if(comm == "btns"){
            handleBtns(1,parseInt( msg[1]));
            handleBtns(2,parseInt( msg[2]))
        }
        else if(comm == "analog"){
          analog[0] = parseInt( msg[1]);
          analog[1] = parseInt( msg[2]);
          analog[2] = parseInt( msg[3]);
          analog[3] = parseInt( msg[4]);
          analog[4] = parseInt( msg[5]);
        }
        else if(comm == "file_ready"){
            console.log("file operation ready");
            setTimeout(doNextFileOp,100);
        }
      }//end handle notif
      
      //change of bluetooth name
      $("#bt-name").change(function(){
          doSend("name_bt "+ $(this).val());//send name changer
      });//end  btname
			
			
			//initialize the interpreter
			 var initInterpreter = function(interpreter, globalObject) {
		      
		      //we have to link our functions to interpreter functions


		      interpreter.setProperty(globalObject, 'doSend',
		          interpreter.createNativeFunction(function(data){
		          		return doSend(data);//call the doSend function
		          }));
         
         interpreter.setProperty(globalObject, 'getBtn',
		          interpreter.createNativeFunction(function(btn_num){
		          		return btns[parseInt(btn_num)-1];//call the getBtn function
		          }));
         
         interpreter.setProperty(globalObject, 'getAnalog',
		          interpreter.createNativeFunction(function(port_num){
		          		return analog[parseInt(port_num)-1];//call the getBtn function
		          }));
		          
		      interpreter.setProperty(globalObject, 'paint_number',
		          interpreter.createNativeFunction(function(num){
		          		return paintDoubleDigit(num);//paint double digit number
		          }));
                

		      //getZiDR, read a digital pin
		      interpreter.setProperty(globalObject, 'getZiDR',
		          interpreter.createNativeFunction(function(pin){
		          		return analogRead[pin];
		          }));

		      //getZiDI, get the distance
		      interpreter.setProperty(globalObject, 'getZiDI',
		          interpreter.createNativeFunction(function(pin){
		          		return getDistance[pin];
		          }));

		      //alert now console.log
		      interpreter.setProperty(globalObject, 'alert',
		          interpreter.createNativeFunction(function(text) {
		        return console.log(text);
		      }));

		      //wait for seconds
		      // Ensure function name does not conflict with variable names.
			  Blockly.JavaScript.addReservedWords('waitFor');
			  interpreter.setProperty(globalObject, 'waitFor', interpreter.createAsyncFunction(
			    function(the_duration, callback) {
			        console.log("waiting", the_duration)
			      // Delay the call to the callback.
			      setTimeout(callback, the_duration);
			    }) );

		    };//end initInterpreter
		    
		      function paintDoubleDigit(the_number){
		          //sanitize
		          the_number = Math.floor(the_number);
		          if(the_number>99)the_number=99;
		          if(the_number<0)the_number=0;
                 var images = {};// images of the numbers
                    images [10]= "c04040404040e000";
                    images [20]= "e02020408080e000";
                    images [30]= "e02020c02020e000";
                    images [40]= "a0a0a0e020202000";
                    images [50]= "e08080e02020e000";
                    images [60]= "e08080e0a0a0e000";
                    images [70]= "e0202060c0808000";
                    images [80]= "e0a0a0e0a0a0e000";
                    images [90]= "e0a0a0e02020e000";
                    images [99]= "0000000000000000";//zeros
                    
                    images [1]= "0c04040404040e00";
                    images [2]= "0e02020408080e00";
                    images [3]= "0e02020c02020e00";
                    images [4]= "0a0a0a0e02020200";
                    images [5]= "0e08080e02020e00";
                    images [6]= "0e08080e0a0a0e00";
                    images [7]= "0e0202060c080800";
                    images [8]= "0e0a0a0e0a0a0e00";
                    images [9]= "0e0a0a0e02020e00";
                    images [0]= "0e0a0a0a0a0a0e00";
                
                
                   var units = the_number%10;
                 var tens =  Math.floor( the_number/10)+"0";
                 if (tens==00) tens = 99;
                 var sum="";
                 for(i=0;i<8;i++){
                     sum+= ""+images[tens][i*2];
                     sum+= ""+images[units][(i*2)+1];
                 }
                 doSend("dr "+sum);
            }//end function

		    var myInterpreter = null; //the interpreter
    		var runner;

		    function resetInterpreter() {
		      myInterpreter = null;
		      if (runner) {
		        clearTimeout(runner);
		        runner = null;
		      }

		    }//end resetInterpreter
      
      function doSleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}//end doSleep

  			let startTime ;//time the code starts running
  			
  			function runCode( ) {
  			    doSend("start_sendee")
  			    //stopCode first
  			    //stopCode();
  			    console.log("run code");
	    	        //enaable btns
  			         $("#stopBtn").prop("disabled", false);// enable
                $("#pauseBtn").prop("disabled", false);// enable
                
  			    if(pauseInterpreter){//was paused so not fresh
  			        pauseInterpreter = false;
  			        stopInterpreter = false;
  			        nextStep();//continue execution
  			    
  			        return;
  			    }//end if paused
  		
  			    
  			    else if(stopInterpreter){//was stopped 
  			     //reset interpreter
  			   resetInterpreter();
  			        stopInterpreter = false;
  			        pauseInterpreter = false;
  			        $("#stopBtn").prop("disabled", false);// enable
  			    }//end if paused
  			    
  			    else{//neither paused, nor stopped, more like restarted
  			        stopCode();//stop currently running code
  			         resetInterpreter();
  			          stopInterpreter = false;
  			        pauseInterpreter = false;
  			        	        //enaable btns
  			         $("#stopBtn").prop("disabled", false);// enable
                $("#pauseBtn").prop("disabled", false);// enable
  			    }//end restart
  			    
  		
  			    
  			 	//set the input inModes
  			 	$.each(inMode, function(pin, value){
                    doSleep(200);
  			 		doSend('input_mode '+pin+ ' '+value);
  			 	});
                doSleep(500);
				
				//ger js code
				
				code =$('#op-js').val();

				startTime = new Date();
				startTime = startTime.getTime();
				console.log("start");
				//eval("(async ()=> {" + code + "})();");
				
				//if btOffline, launch demo
				if(!bleConnected)  $('#demo-tab').trigger("click");
                //bootstrap.Tab(triggerEl).show() // Select tab by name
				
				myInterpreter = new Interpreter(code, initInterpreter);
				
		        nextStep();//start executing
			}//end runCode
			
			 function nextStep() {
			 if (pauseInterpreter){
			     return;
			 }//
			 else if(stopInterpreter){
			     
			     resetInterpreter();
			     return;
			 }
              if (myInterpreter.step()) { //still something to run
                window.setTimeout(nextStep, 0);
              }//end if step
              else{
                   let finishTime = new Date();
		                finishTime = finishTime.getTime();
		                console.log("Completed in"+ (finishTime-startTime)+ 'ms');
		                //resetInterpreter();
              }//end else
            }//end next step
            
            let pauseInterpreter =  false;
            function pauseCode(){
                stopInterpreter = false; //not doing stoping here
                pauseInterpreter = true; //pause execution
                $("#pauseBtn").prop("disabled", true);// disable
                //$("#stopBtn").prop("disabled", true);// disable
                    $("#runBtn").prop("disabled", false);// enable
  			        doSend("motor_off 3");
        
            }//
            
            let stopInterpreter = false;
            function stopCode(){
                pauseInterpreter = false;//not doing pausing here
                stopInterpreter = true; //stop execution
                doSend("motor_off 3");
                $("#stopBtn").prop("disabled", true);// disable
                $("#pauseBtn").prop("disabled", true);// disable
                    //$("#runBtn").prop("disabled", false);// enable
  			        
            }//
            
            function bleDisconnected(event){
                bleConnected = false;//no longer connected
                console.log("Gatt server disconnected");
                $("#stopBtn").prop("disabled", true);// disable
                $("#pauseBtn").prop("disabled", true);// disable
                    //$("#runBtn").prop("disabled", true);// disable
                    $("#ble-status").text("DISCONNECTED");
            }//end bleDisconnected
            
            document.addEventListener('keydownp', (event) => {
                if(event.repeat)return;//prevent retriggering
              let keyName = event.key.toUpperCase();
              if(keyName == " ")keyName = "SPACE";//space is a blank space " ", so make it filled
              console.log(keyName);
              if(!stopInterpreter && !pauseInterpreter  && myInterpreter){
                  let eventCode = "onKey"+ keyName +"Pressed();";
                  console.log(eventCode);
                  myInterpreter.appendCode(eventCode);//run thus
                  nextStep();
              }//not null
            }, false);//end key event listener
            
            
            
        	function storeWorkspace()
			{
				// var xmlDom = Blockly.Xml.workspaceToDom(Blockly.mainWorkspace);
				//var xmlText = Blockly.Xml.domToPrettyText(xmlDom);
				let ws = Blockly.serialization.workspaces.save(workspace);
				let gg = {projectName: $("#project-name").val(), workspace:ws, storageId: storageId};
				 // Serialize the state.
				//const gg = Blockly.serialization.workspaces.save(workspace);
				localStorage.setItem("workspace-"+storageId, JSON.stringify(gg));
			}//end store
			
			function loadWorkspace() {
			    let gg = JSON.parse(localStorage.getItem("workspace-"+storageId))
				/*var xmlText = gg.workspace;
				
				if (xmlText) {
					//Blockly.mainWorkspace.clear();
					workspace.clear();
					//xmlDom = Blockly.Xml.textToDom(xmlText);
				//	Blockly.Xml.domToWorkspace(xmlDom,Blockly.mainWorkspace,);
				Blockly.Xml.appendDomToWorkspace(xmlText, workspace,);*/
				$("#project-name").val(gg.projectName)
				Blockly.serialization.workspaces.load( gg.workspace, workspace);
				
			}//end load
			
	let fileContent;
	let fileName;
	let fileLength;
	let fileIndex= -1;
	let fileChunkSize=120;
	$("#file-send").click(function(){
	    fileIndex = 0;
	    doSend("stop_sendee");
	    setTimeout(function(){//wait for sometime
	         fileName = $("#file-name").val();
	    fileContent = $("#file-content").val();
	    fileLength = fileContent.length;
	    doSend("crf "+fileName);
	    }, 1000);
	   
	    
	});
	
	function doNextFileOp()
	{   
	    if (fileIndex == -1)return;//we have gootten to the end
	    if(fileIndex <= fileLength && fileIndex != -1){
	        doSend("apf "+fileContent.substring(fileIndex, fileIndex + fileChunkSize));
	        fileIndex = fileIndex + fileChunkSize;
	    }
	    else{//we have finished sending the file
	        fileIndex = -1;
	        doSend("clf ");
	    }
	}
		
    </script>
    <script>
        $(document).ready(function(){
            
            for(i=0;i<8;i++){
                $("#demo-matrix-screen").append("<div>")
                for(j=0;j<8;j++){
                    //clone the
                    let matrixLed = $(".template .matrix-led").clone();
                    $("#demo-matrix-screen").append(matrixLed);
                }
             //$("#demo-matrix-screen").append("</div>");    
            }
            setInterval(scrollText, 200);//auto scroll text
            //for touch screens
            document.getElementById("demo-button-1").addEventListener("touchstart", event=>{
               handleBtns(1,1) 
            })
            document.getElementById("demo-button-2").addEventListener("touchstart", event=>{
               handleBtns(2,1) 
            })
            document.getElementById("demo-button-1").addEventListener("touchend", event=>{
               handleBtns(1,0) 
            })
            document.getElementById("demo-button-2").addEventListener("touchend", event=>{
               handleBtns(2,0) 
            })
            //btns
            $("#demo-button-1").mousedown(function(){
                //alert(1)
                handleBtns(1,1)
                
            });
             $("#demo-button-2").mousedown(function(){
                handleBtns(2,1)
            });
              $("#demo-button-1").mouseup(function(){
                handleBtns(1,0)
            });
              $("#demo-button-2").mouseup(function(){
                handleBtns(2,0)
            });
            $("#project-name").change(function(){storeWorkspace();});
        });//end ready
        
        function handleDemo(msg){
            //console.log("HANDLING "+ msg);
            comm = msg.split(" ")[0];
            splitMsg = msg.split(" ")
            //console.log("COMMAND "+ comm);
            if(comm == "dr")drawMatrix(msg.split(" ")[1]);
            else if(comm == "dt")displayText(msg.substring(3));
            else if(comm == "tone_on")playTone(msg.split(" ")[1]);
            else if(comm == "tone_off")playTone(0);
            else if(comm=="rgb"){
                console.log(44444)
                handleRGB(splitMsg[1],splitMsg[2],splitMsg[3],splitMsg[4])
            }
        }
        
        function drawMatrix(img)
        {
            displayMode = "img"
            clearScreen();
            img_len = img.length//2 #get half the lenght of characters cos we pickintwos
            for (i=0;i<img_len;i++){
                line = img[2*i]+""+img[(2*i)+1] //pick in twos
                
                //tens = int(line,0) #convert to int
                //wa = str('{0:08b}'.format(tens)) #convert to byte then string
                bin = ("00000000" + (parseInt(line, 16)).toString(2)).substr(-8);
                //console.log(line+ " : "+ bin);
                bin = String(bin);
                for(j=0;j<8;j++){//for all characters in the binary line
                    if(bin[j] == '1')$("#demo-matrix-screen .matrix-led").eq(i*8+j).addClass("on");
                }//end for each pixel char
            }//end for line
        }//end function drawMatrix
        
        function clearScreen(){
            $("#demo-matrix-screen .matrix-led").removeClass("on");//remove on
        }//end function clearScreen
        
  charLib       = [
  3, 8, 0b00000000, 0b00000000, 0b00000000, 0b00000000, 0b00000000, // space
  1, 8, 0b01011111, 0b00000000, 0b00000000, 0b00000000, 0b00000000, // !
  3, 8, 0b00000011, 0b00000000, 0b00000011, 0b00000000, 0b00000000, // "
  5, 8, 0b00010100, 0b00111110, 0b00010100, 0b00111110, 0b00010100, // #
  4, 8, 0b00100100, 0b01101010, 0b00101011, 0b00010010, 0b00000000, // $
  5, 8, 0b01100011, 0b00010011, 0b00001000, 0b01100100, 0b01100011, // %
  5, 8, 0b00110110, 0b01001001, 0b01010110, 0b00100000, 0b01010000, // &
  1, 8, 0b00000011, 0b00000000, 0b00000000, 0b00000000, 0b00000000, // '
  3, 8, 0b00011100, 0b00100010, 0b01000001, 0b00000000, 0b00000000, // (
  3, 8, 0b01000001, 0b00100010, 0b00011100, 0b00000000, 0b00000000, // )
  5, 8, 0b00101000, 0b00011000, 0b00001110, 0b00011000, 0b00101000, // *
  5, 8, 0b00001000, 0b00001000, 0b00111110, 0b00001000, 0b00001000, // +
  2, 8, 0b10110000, 0b01110000, 0b00000000, 0b00000000, 0b00000000, // ,
  4, 8, 0b00001000, 0b00001000, 0b00001000, 0b00001000, 0b00000000, // -
  2, 8, 0b01100000, 0b01100000, 0b00000000, 0b00000000, 0b00000000, // .
  4, 8, 0b01100000, 0b00011000, 0b00000110, 0b00000001, 0b00000000, // /
  4, 8, 0b00111110, 0b01000001, 0b01000001, 0b00111110, 0b00000000, // 0
  3, 8, 0b01000010, 0b01111111, 0b01000000, 0b00000000, 0b00000000, // 1
  4, 8, 0b01100010, 0b01010001, 0b01001001, 0b01000110, 0b00000000, // 2
  4, 8, 0b00100010, 0b01000001, 0b01001001, 0b00110110, 0b00000000, // 3
  4, 8, 0b00011000, 0b00010100, 0b00010010, 0b01111111, 0b00000000, // 4
  4, 8, 0b00100111, 0b01000101, 0b01000101, 0b00111001, 0b00000000, // 5
  4, 8, 0b00111110, 0b01001001, 0b01001001, 0b00110000, 0b00000000, // 6
  4, 8, 0b01100001, 0b00010001, 0b00001001, 0b00000111, 0b00000000, // 7
  4, 8, 0b00110110, 0b01001001, 0b01001001, 0b00110110, 0b00000000, // 8
  4, 8, 0b00000110, 0b01001001, 0b01001001, 0b00111110, 0b00000000, // 9
  2, 8, 0b01010000, 0b00000000, 0b00000000, 0b00000000, 0b00000000, // :
  2, 8, 0b10000000, 0b01010000, 0b00000000, 0b00000000, 0b00000000, // ;
  3, 8, 0b00010000, 0b00101000, 0b01000100, 0b00000000, 0b00000000, // <
  3, 8, 0b00010100, 0b00010100, 0b00010100, 0b00000000, 0b00000000, // =
  3, 8, 0b01000100, 0b00101000, 0b00010000, 0b00000000, 0b00000000, // >
  4, 8, 0b00000010, 0b01011001, 0b00001001, 0b00000110, 0b00000000, // ?
  5, 8, 0b00111110, 0b01001001, 0b01010101, 0b01011101, 0b00001110, // @
  4, 8, 0b01111110, 0b00010001, 0b00010001, 0b01111110, 0b00000000, // A
  4, 8, 0b01111111, 0b01001001, 0b01001001, 0b00110110, 0b00000000, // 0b
  4, 8, 0b00111110, 0b01000001, 0b01000001, 0b00100010, 0b00000000, // C
  4, 8, 0b01111111, 0b01000001, 0b01000001, 0b00111110, 0b00000000, // D
  4, 8, 0b01111111, 0b01001001, 0b01001001, 0b01000001, 0b00000000, // E
  4, 8, 0b01111111, 0b00001001, 0b00001001, 0b00000001, 0b00000000, // F
  4, 8, 0b00111110, 0b01000001, 0b01001001, 0b01111010, 0b00000000, // G
  4, 8, 0b01111111, 0b00001000, 0b00001000, 0b01111111, 0b00000000, // H
  3, 8, 0b01000001, 0b01111111, 0b01000001, 0b00000000, 0b00000000, // I
  4, 8, 0b00110000, 0b01000000, 0b01000001, 0b00111111, 0b00000000, // J
  4, 8, 0b01111111, 0b00001000, 0b00010100, 0b01100011, 0b00000000, // K
  4, 8, 0b01111111, 0b01000000, 0b01000000, 0b01000000, 0b00000000, // L
  5, 8, 0b01111111, 0b00000010, 0b00001100, 0b00000010, 0b01111111, // M
  5, 8, 0b01111111, 0b00000100, 0b00001000, 0b00010000, 0b01111111, // N
  4, 8, 0b00111110, 0b01000001, 0b01000001, 0b00111110, 0b00000000, // O
  4, 8, 0b01111111, 0b00001001, 0b00001001, 0b00000110, 0b00000000, // P
  4, 8, 0b00111110, 0b01000001, 0b01000001, 0b10111110, 0b00000000, // Q
  4, 8, 0b01111111, 0b00001001, 0b00001001, 0b01110110, 0b00000000, // R
  4, 8, 0b01000110, 0b01001001, 0b01001001, 0b00110010, 0b00000000, // S
  5, 8, 0b00000001, 0b00000001, 0b01111111, 0b00000001, 0b00000001, // T
  4, 8, 0b00111111, 0b01000000, 0b01000000, 0b00111111, 0b00000000, // U
  5, 8, 0b00001111, 0b00110000, 0b01000000, 0b00110000, 0b00001111, // V
  5, 8, 0b00111111, 0b01000000, 0b00111000, 0b01000000, 0b00111111, // W
  5, 8, 0b01100011, 0b00010100, 0b00001000, 0b00010100, 0b01100011, // X
  5, 8, 0b00000111, 0b00001000, 0b01110000, 0b00001000, 0b00000111, // Y
  4, 8, 0b01100001, 0b01010001, 0b01001001, 0b01000111, 0b00000000, // Z
  2, 8, 0b01111111, 0b01000001, 0b00000000, 0b00000000, 0b00000000, // [
  4, 8, 0b00000001, 0b00000110, 0b00011000, 0b01100000, 0b00000000, // \ backslash
  2, 8, 0b01000001, 0b01111111, 0b00000000, 0b00000000, 0b00000000, // ]
  3, 8, 0b00000010, 0b00000001, 0b00000010, 0b00000000, 0b00000000, // hat
  4, 8, 0b01000000, 0b01000000, 0b01000000, 0b01000000, 0b00000000, // _
  2, 8, 0b00000001, 0b00000010, 0b00000000, 0b00000000, 0b00000000, // `
  4, 8, 0b00100000, 0b01010100, 0b01010100, 0b01111000, 0b00000000, // a
  4, 8, 0b01111111, 0b01000100, 0b01000100, 0b00111000, 0b00000000, // b
  4, 8, 0b00111000, 0b01000100, 0b01000100, 0b00101000, 0b00000000, // c
  4, 8, 0b00111000, 0b01000100, 0b01000100, 0b01111111, 0b00000000, // d
  4, 8, 0b00111000, 0b01010100, 0b01010100, 0b00011000, 0b00000000, // e
  3, 8, 0b00000100, 0b01111110, 0b00000101, 0b00000000, 0b00000000, // f
  4, 8, 0b10011000, 0b10100100, 0b10100100, 0b01111000, 0b00000000, // g
  4, 8, 0b01111111, 0b00000100, 0b00000100, 0b01111000, 0b00000000, // h
  3, 8, 0b01000100, 0b01111101, 0b01000000, 0b00000000, 0b00000000, // i
  4, 8, 0b01000000, 0b10000000, 0b10000100, 0b01111101, 0b00000000, // j
  4, 8, 0b01111111, 0b00010000, 0b00101000, 0b01000100, 0b00000000, // k
  3, 8, 0b01000001, 0b01111111, 0b01000000, 0b00000000, 0b00000000, // l
  5, 8, 0b01111100, 0b00000100, 0b01111100, 0b00000100, 0b01111000, // m
  4, 8, 0b01111100, 0b00000100, 0b00000100, 0b01111000, 0b00000000, // n
  4, 8, 0b00111000, 0b01000100, 0b01000100, 0b00111000, 0b00000000, // o
  4, 8, 0b11111100, 0b00100100, 0b00100100, 0b00011000, 0b00000000, // p
  4, 8, 0b00011000, 0b00100100, 0b00100100, 0b11111100, 0b00000000, // q
  4, 8, 0b01111100, 0b00001000, 0b00000100, 0b00000100, 0b00000000, // r
  4, 8, 0b01001000, 0b01010100, 0b01010100, 0b00100100, 0b00000000, // s
  3, 8, 0b00000100, 0b00111111, 0b01000100, 0b00000000, 0b00000000, // t
  4, 8, 0b00111100, 0b01000000, 0b01000000, 0b01111100, 0b00000000, // u
  5, 8, 0b00011100, 0b00100000, 0b01000000, 0b00100000, 0b00011100, // v
  5, 8, 0b00111100, 0b01000000, 0b00111100, 0b01000000, 0b00111100, // w
  5, 8, 0b01000100, 0b00101000, 0b00010000, 0b00101000, 0b01000100, // x
  4, 8, 0b10011100, 0b10100000, 0b10100000, 0b01111100, 0b00000000, // y
  3, 8, 0b01100100, 0b01010100, 0b01001100, 0b00000000, 0b00000000, // z
  3, 8, 0b00001000, 0b00110110, 0b01000001, 0b00000000, 0b00000000, // {
  1, 8, 0b01111111, 0b00000000, 0b00000000, 0b00000000, 0b00000000, // |
  3, 8, 0b01000001, 0b00110110, 0b00001000, 0b00000000, 0b00000000, // }
  4, 8, 0b00001000, 0b00000100, 0b00001000, 0b00000100, 0b00000000, // ~
];

    let textPixels= Array();//empty array
    //text is stored in 8x8 blocks
    
    let displayMode;
    let cursor=0;
    let textLength;//
    
    
    function displayText(text){
        console.log("do text disp");
        displayMode = "text"
        cursor =0;
        text= text+" ";//extra space
        clearScreen();
        textLength = text.length;// set global length of displayText
        textPixels = Array(64*(textLength)).fill(0);//1 extra space for buffer
        for(num =0; num< textLength ; num++){//cycle through characters
               asc = text.charCodeAt(num)-32 ;//array starts at char 32
                //console.log("TXT "+text+" ASC :::"+asc);
                for (i=2;i<7;i++){//we ignore the first two characters in charLib. represents the columns
                        bin = String(charLib[asc*7+i]);
                        bin = String(("00000000"+parseInt(bin).toString(2)).substr(-8)+" ");
                       // console.log(bin)
                        for(j=0;j<8;j++){//for all characters in the binary line
                        if(bin[j] == '1')textPixels[i+(7-j)*8 + (64*num)]=1;//64 so we can face the appropriate textPixel block,
                        }//end for each pixel char
                    }//end for line
        }//end for num
        showText();
    }//end function displayText
    
    function showText(col=0){
        clearScreen();
        let start = Math.floor(col/8)*64; //the start of the block
        //i is for row
        //j is for column
        //current character
        col = col%8;
        for(i=0; i<8; i++){
            for(j=col; j<8; j++){
                if(textPixels[start+(i*8)+j]==1)$("#demo-matrix-screen .matrix-led").eq((i*8)+j-col).addClass("on");
                //-col to shif
            }//end for j
        }//end for i
        //next character
    //clearScreen();
        col = col%8;
        start+=64
          for(i=0; i<8; i++){
            for(j=0; j<col; j++){
                if(textPixels[start+(i*8)+j]==1)$("#demo-matrix-screen .matrix-led").eq(((i+1)*8)+j-col).addClass("on");
                //-col to shif
            }//end for j
        }//end for i
        
    }//end function showText
    
    function scrollText()
    {
        if(displayMode!="text")return;
        if(textLength<3)return;//no scroll for single character text
        if(cursor >= (textLength-1)*8){console.log("text too long"); displayMode=""; return;}
        cursor+=1;//increment cursor
        showText(cursor);
    }
    
    // create web audio api context
let audioCtx = new(window.AudioContext || window.webkitAudioContext)();
 // create Oscillator node
      let oscillator = audioCtx.createOscillator();
        oscillator.type = 'square';   
      
    
function playTone(frequency) {
   
    oscillator.frequency.value = frequency; // value in hertz
    oscillator.connect(audioCtx.destination);
    try {
          oscillator.start();
        } catch (E) {
          console.log(E)
        } finally {
          
        }
    
    }//end function playNote
    
    function handleBtns(num,state){
        console.log("handling buttons")
        //transfer current buttons to previous buttons
            prevBtns[num-1] = btns[num-1];// transfer to preious/
          btns[num-1] = Boolean(state); 
 
          
            if(!stopInterpreter && !pauseInterpreter  && myInterpreter){
                    let btnCombo='';
                    
                    console.log(btns)
                    if(btns[0]== true && prevBtns[0]== false)btnCombo += '1';
                    if(btns[1]== true && prevBtns[1]== false)btnCombo += '2';
                    console.log("combo "+ btnCombo)
                    if(btnCombo){
                        //alert(btnCombo);//
                         let eventCode = "btn"+ btnCombo +"Pressed();";
                          console.log(eventCode);
                          myInterpreter.appendCode(eventCode);//run thus
                          nextStep();
                    }//end if btnCombo
                 
            }//not null
    }//end handleBtns
    
    function handleRGB(num,r,g,b){
        console.log(7777)
        let color = r + "," + g + "," + b
        console.log(color)
        let bg = "rgb("+color+")"
        
        console.log(bg) 
        $("#demo-rgb-"+num).css("background", bg)
    }//end handleRGB

    </script>
    <script src="file_handling.js?ver=<?php echo time(); ?>"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</div> <!--container end-->  
 
  </body>
</html>
