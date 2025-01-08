Blockly.defineBlocksWithJsonArray([
{
  "type": "haske_move_left",
  "message0": "move player left",
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 240,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "haske_move_right",
  "message0": "move player right",
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 240,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "haske_move_up",
  "message0": "move player up",
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 240,
  "tooltip": "",
  "helpUrl": ""
},
{
  "type": "haske_move_down",
  "message0": "move player down",
  "inputsInline": true,
  "previousStatement": null,
  "nextStatement": null,
  "colour": 240,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "haske_var_move_up",
  "message0": "Move up %1 time(s)",
  "args0": [
    {
      "type": "field_number",
      "name": "times",
      "value": 1,
      "min": 0
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "haske_var_move_right",
  "message0": "Move right %1 time(s)",
  "args0": [
    {
      "type": "field_number",
      "name": "times",
      "value": 1,
      "min": 0
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "haske_var_move_left",
  "message0": "Move left %1 time(s)",
  "args0": [
    {
      "type": "field_number",
      "name": "times",
      "value": 1,
      "min": 0
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},

{
  "type": "haske_var_move_down",
  "message0": "Move down %1 time(s)",
  "args0": [
    {
      "type": "field_number",
      "name": "times",
      "value": 1,
      "min": 0
    }
  ],
  "previousStatement": null,
  "nextStatement": null,
  "colour": 230,
  "tooltip": "",
  "helpUrl": ""
},


])//end

var haskeStart = {
 // "type": "haske_start",
  "message0": "Start",
  "nextStatement": null,
  "colour": 20,
  "tooltip": "",
  "helpUrl": ""
}

Blockly.Blocks['haske_start'] = {
  init: function() {
    this.jsonInit(haskeStart);
    // Assign 'this' to a variable for use in the tooltip closure below.
    var thisBlock = this;
    this.setDeletable(false);
  }
};