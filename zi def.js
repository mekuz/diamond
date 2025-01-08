

Blockly.defineBlocksWithJsonArray([{
  "type": "io_digital_write",
  "message0": "Set digital pin %1 to %2",
  "args0": [
    {
      "type": "field_number",
      "name": "pin number",
      "value": 0,
      "min": 0,
      "max": 13
    },
    {
      "type": "field_dropdown",
      "name": "pin value",
      "options": [
        [
          "HIGH",
          "HIGH"
        ],
        [
          "LOW",
          "LOW"
        ]
      ]
    }
  ],
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_servo",
  "message0": "Set servo at port %1 to angle %2",
  "args0": [
    {
      "type": "field_number",
      "name": "port_name",
      "value": 3,
      "min": 1,
      "max": 5,
      "precision": 1
    },
    {
      "type": "input_value",
      "name": "angle",
      "check": "Number"
    }
  ],
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "io_digital_read",
  "message0": "Read value of digital pin %1",
  "args0": [
    {
      "type": "field_number",
      "name": "pin name",
      "value": 2,
      "min": 2,
      "max": 13
    }
  ],
  "inputsInline": true,
  "output": [
    "Number",
    "Boolean"
  ],
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "io_get_distance",
  "message0": "distance sensor value port %1",
  "args0": [
    {
      "type": "field_number",
      "name": "pin name",
      "value": 1,
      "min": 1,
      "max": 5
    }
  ],
  "inputsInline": true,
  "output": [
    "Number",
    "Boolean"
  ],
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "wait",
  "message0": "wait for %1 seconds",
  "args0": [
    {
      "type": "field_number",
      "name": "NAME",
      "value": 1,
      "min": 0
    }
  ],
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_rgb",
  "message0": "Set  LED  %1 colour to %2",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "led_number",
      "options": [
        [
          "1",
          "1"
        ],
        [
          "2",
          "2"
        ]
      ]
    },
    {
      "type": "field_colour",
      "name": "led_colour",
      "colour": "#ff0000"
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_tone",
  "message0": "play tone at a frequency of %1 Hertz",
  "args0": [
    {
      "type": "field_number",
      "name": "tone_freq",
      "value": 0,
      "min": 622,
      "max": 10000
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_beep",
  "message0": "beep %1",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "beep_status",
      "options": [
        [
          "on",
          "on"
        ],
        [
          "off",
          "off"
        ]
      ]
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_button",
  "message0": "button %1 pressed",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "button_number",
      "options": [
        [
          "1",
          "1"
        ],
        [
          "2",
          "2"
        ]
      ]
    }
  ],
  "output": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_ldr",
  "message0": "get value of Light sensor %1",
  "args0": [
    {
      "type": "field_number",
      "name": "ldr_number",
      "value": 1,
      "min": 1,
      "max": 5
    }
  ],
  "output": [
    "Boolean",
    "Number"
  ],
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_display_text",
  "message0": "write %1 on display",
  "args0": [
    {
      "type": "input_value",
      "name": "text_value",
      //"text": "text",
       "check": [
        "Number",
        "String"
      ]
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_double_digit",
  "message0": "write double digit %1 %2",
  "args0": [
    {
      "type": "input_dummy"
    },
    {
      "type": "input_value",
      "name": "number",
      "check": "Number"
    }
  ],
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "ayo_motor",
  "message0": "run motor %1 %2 at speed %3",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "motor_number",
      "options": [
        [
          "1",
          "1"
        ],
        [
          "2",
          "2"
        ],
        [
          "1 and 2",
          "3"
        ]
      ]
    },
    {
      "type": "field_dropdown",
      "name": "motor_direction",
      "options": [
        [
          "forward",
          "f"
        ],
        [
          "backward",
          "b"
        ]
      ]
    },
    {
      "type": "input_value",
      "name": "motor_speed",
      "check": "Number"
    }
  ],
  "inputsInline": false,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "ayo_drive",
  "message0": "drive %1 with a speed of %2",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "drive_direction",
      "options": [
        [
          "forward",
          "fwd"
        ],
        [
          "backward",
          "bwd"
        ],
        [
          "clockwise",
          "cw"
        ],
        [
          "anticlockwise",
          "acw"
        ]
      ]
    },
    {
      "type": "field_number",
      "name": "drive_speed",
      "value": 0,
      "min": 0,
      "max": 100,
      "precision": 1
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_stop_motor",
  "message0": "stop motor(s) %1",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "motor_number",
      "options": [
        [
          "1 and 2",
          "3"
        ],
        [
          "1",
          "1"
        ],
        [
          "2",
          "2"
        ]
      ]
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "ayo_analog_read",
  "message0": "get analog value of port %1",
  "args0": [
    {
      "type": "field_number",
      "name": "port_number",
      "value": 1,
      "min": 1,
      "max": 5,
      "precision": 1
    }
  ],
  "output": "Number",
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "ayo_forever",
  "message0": "forever %1",
  "args0": [
    {
      "type": "input_statement",
      "name": "inside"
    }
  ],
  "previousStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "ayo_key_event",
  "message0": "when key %1 is pressed %2",
  "args0": [
    {
      "type": "field_dropdown",
      "name": "key_name",
      "options": [
        [
          "A",
          "A"
        ],
        [
          "S",
          "S"
        ],
        [
          "D",
          "D"
        ],
        [
          "space",
          "SPACE"
        ],
        [
          "up arrow",
          "ARROWUP"
        ],
        [
          "down arrow",
          "ARROWDOWN"
        ],
        [
          "left arrow",
          "ARROWLEFT"
        ],
        [
          "right arrow",
          "ARROWRIGHT"
        ]
      ]
    },
    {
      "type": "input_statement",
      "name": "content"
    }
  ],
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},


{
  "type": "start_block",
  "message0": "Start",
  "nextStatement": null,
  "colour": 20,
  "tooltip": "",
  "helpUrl": ""
}]
);

Blockly.Blocks['ayo_display_grid'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Display");
    for (let i= 0; i<8; i++){
         let dum = this.appendDummyInput();
        for(let j = 0; j<8; j++){
          dum.appendField(new Blockly.FieldCheckbox("FALSE"), "box"+i+j);
        }//end for j
    }//end for i
 
  
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};