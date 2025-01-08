//generate js code

javascript.javascriptGenerator.forBlock["io_digital_write"] = function (block) {
  var number_pin_number = block.getFieldValue("pin number");
  var dropdown_pin_value = block.getFieldValue("pin value");
  // TODO: Assemble JavaScript into code variable.

  if (dropdown_pin_value == "HIGH") {
    dropdown_pin_value = 1;
  } else dropdown_pin_value = 0;
  var code =
    'waitFor(200); doSend("ziDW ' + number_pin_number + " " + dropdown_pin_value + '");\n';
  return code;
};

javascript.javascriptGenerator.forBlock["io_digital_read"] = function (block) {
  var number_pin_name = block.getFieldValue("pin name");
  // TODO: Assemble JavaScript into code variable.
  var code = "getZiDR(" + number_pin_name + ")";

  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};



javascript.javascriptGenerator.forBlock["wait"] = function (block) {
  var number_name = block.getFieldValue("NAME");
  // TODO: Assemble JavaScript into code variable.
  var code = " waitFor(" + Math.round(number_name * 1000) + ");\n";
  return code;
};

javascript.javascriptGenerator.forBlock["start_block"] = function (block) {
  // TODO: Assemble JavaScript into code variable.
  var code = "\n";
  return code;
};
 
javascript.javascriptGenerator.forBlock["lists_create_empty"] = function (block) {
  // Create an empty list.
  return ["[]", Blockly.JavaScript.ORDER_ATOMIC];
};

function hexToRgb(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

//alert(hexToRgb("#0033ff").g); // "51";

javascript.javascriptGenerator.forBlock["ayo_rgb"] = function (block) {
  var led_number = block.getFieldValue("led_number");
  var led_colour = block.getFieldValue("led_colour");
  // TODO: Assemble JavaScript into code variable.
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(led_colour);
  
   let r =parseInt(result[1], 16);
   let g = parseInt(result[2], 16);
   let b = parseInt(result[3], 16);
  var code = 'waitFor(200); doSend("rgb '+ led_number + " "+ r  + " "+ g  + " "+ b  + '");\n';
  return code;
};

javascript.javascriptGenerator.forBlock["ayo_tone"] = function (block) {
  var tone_freq = block.getFieldValue("tone_freq");
  // TODO: Assemble JavaScript into code variable.
  var code = 'waitFor(200); doSend("tone_on ' + tone_freq + '");\n';
  return code;
};

javascript.javascriptGenerator.forBlock["ayo_beep"] = function (block) {
  var beep_status = block.getFieldValue("beep_status");
  // TODO: Assemble JavaScript into code variable.
  let tone_freq = 0;
  let code;
  if (beep_status == "on") {
    tone_freq = 1000;
    code = 'waitFor(200); doSend("tone_on ' + tone_freq + '");\n';
  } else {
    code = 'waitFor(200); doSend("tone_off ");\n';
  }
  return code;
};
javascript.javascriptGenerator.forBlock["ayo_button"] = function (block) {
  var button_number = block.getFieldValue("button_number");
  // TODO: Assemble JavaScript into code variable.
  var code = "getBtn("+ button_number +")";
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

javascript.javascriptGenerator.forBlock["ayo_ldr"] = function (block) {
  var port_number = block.getFieldValue("ldr_number");
  // TODO: Assemble JavaScript into code variable.
  setInMode(port_number,"ldr");
  var code = "getAnalog(" +port_number + ")";
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

javascript.javascriptGenerator.forBlock["ayo_display_text"] = function (block, generator) {
  var text_value =  generator.valueToCode(block, 'text_value', javascript.Order.ATOMIC) 
  // TODO: Assemble JavaScript into code variable.
  //var code = 'waitFor(200); doSend("dt ' + text_value + '"); waitFor('+ text_value.length * 200 * 8 +') \n';
  var code = `waitFor(200); doSend('dt ' +${text_value} ); waitFor((''+${text_value}).length * 200 * 8 ) \n`;

  return code;
};

javascript.javascriptGenerator.forBlock["ayo_display_grid"] = function (block) {
  
  var checkbox_box = block.getFieldValue("box") == "TRUE";
  let boxes = {};//objec to hold the boxes
  let op="";//output
  for (let i=0; i<8; i++){
    let valz= "";
    for (let j= 0; j<8; j++){
      boxes[i+""+j] = (block.getFieldValue("box"+i+j) == "TRUE")?1:0;
      valz+= boxes[i+""+j] ;
    }//end for j
    valz = parseInt(valz,2);//to base 2
    valz = valz.toString(16);// to hex
    if(valz.length<2)valz= 0+valz; //ensure thatthere is a 0 before valz
    op+= valz;
  }//end for i
  // TODO: Assemble JavaScript into code variable.
  var code =  'waitFor(200); doSend("dr ' + op + '");\n';
  return code;
};


javascript.javascriptGenerator.forBlock['ayo_double_digit'] = function(block) {
  var the_number = Blockly.JavaScript.valueToCode(block, 'number', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
 var code = 'waitFor(200); paint_number('+ the_number +');\n';
  return code;
};


javascript.javascriptGenerator.forBlock['ayo_motor'] = function(block) {
  var motor_number = block.getFieldValue('motor_number');
  var motor_direction = block.getFieldValue('motor_direction');
  var motor_speed = Blockly.JavaScript.valueToCode(block, 'motor_speed', Blockly.JavaScript.ORDER_ATOMIC);
  var code = 
  'waitFor(200); doSend("motor ' + motor_number + ' '+ motor_direction + ' " +' + motor_speed + ' );\n';
  ;
  return code;
};

javascript.javascriptGenerator.forBlock["ayo_drive"] = function (block) {
  var dropdown_drive_direction = block.getFieldValue("drive_direction");
  var number_drive_speed = block.getFieldValue("drive_speed");
  // TODO: Assemble JavaScript into code variable.
  var code = "\n";
  return code;
} 

javascript.javascriptGenerator.forBlock["ayo_stop_motor"] = function (block) {
  var motor_number = block.getFieldValue("motor_number");
  // TODO: Assemble JavaScript into code variable.
  var code = 'waitFor(200); doSend("motor_off ' + motor_number +'" );\n';
  return code;
};

javascript.javascriptGenerator.forBlock['ayo_servo'] = function(block) {
  var port_name = block.getFieldValue('port_name');
  var angle = Blockly.JavaScript.valueToCode(block, 'angle', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'waitFor(200); doSend("servo ' + port_name + ' "+' + angle + ');\n';
  return code;
};


javascript.javascriptGenerator.forBlock["ayo_analog_read"] = function (block) {
  var port_number = block.getFieldValue("port_number");
  // TODO: Assemble JavaScript into code variable.
  setInMode(port_number,"pot");
  var code = "getAnalog(" +port_number + ")";
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

javascript.javascriptGenerator.forBlock["io_get_distance"] = function (block) {
  var number_pin_name = block.getFieldValue("pin name");
  // TODO: Assemble JavaScript into code variable.
  var code = "Math.floor(getAnalog(" + number_pin_name + "))";
  //let's us know that this guy is for distace and should not be read as analog input
   setInMode(number_pin_name,"distance");
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

javascript.javascriptGenerator.forBlock['ayo_forever'] = function(block) {
  var statements_inside = Blockly.JavaScript.statementToCode(block, 'inside');
  // TODO: Assemble JavaScript into code variable.
  var code = 'while(true){' + statements_inside + '};\n';
  return code;
};

javascript.javascriptGenerator.forBlock['ayo_key_event'] = function(block) {
  var key_name = block.getFieldValue('key_name');
  var statements_content = Blockly.JavaScript.statementToCode(block, 'content');
  // TODO: Assemble JavaScript into code variable.
  var code = 'function onKey'+key_name+'Pressed(){'+ statements_content+ '};\n';
  return code;
};
