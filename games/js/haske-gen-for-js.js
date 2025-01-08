javascript.javascriptGenerator.forBlock["haske_start"] = function (block) {
  // TODO: Assemble JavaScript into code variable.
  var code = "\n";
  return code;
};

javascript.javascriptGenerator.forBlock["haske_move_up"] = function (block) {
  //var tone_freq = block.getFieldValue("tone_freq");
  // TODO: Assemble JavaScript into code variable.
  var code = `
			  ev("moveUp();") ;\n
			  waitFor(1000);\n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock["haske_move_down"] = function (block) {
  //var tone_freq = block.getFieldValue("tone_freq");
  // TODO: Assemble JavaScript into code variable.
  var code = `
			  ev("moveDown();") ;\n
			  waitFor(1000);\n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock["haske_move_left"] = function (block) {
  //var tone_freq = block.getFieldValue("tone_freq");
  // TODO: Assemble JavaScript into code variable.
  var code = `
			  ev("moveLeft();") ;\n
			  waitFor(1000);\n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock["haske_move_right"] = function (block) {
  //var tone_freq = block.getFieldValue("tone_freq");
  // TODO: Assemble JavaScript into code variable.
  var code = `
			  ev("moveRight();") ;\n
			  waitFor(1000);\n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock['haske_var_move_right'] = function(block, generator) {
  var number_times = block.getFieldValue('times');
  // TODO: Assemble javascript into code variable.
  var code = `
			for(i=0; i < ${number_times} ; i++){\n
			  ev("moveRight();") ;\n
			  waitFor(1000);\n
			}; \n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock['haske_var_move_left'] = function(block, generator) {
  var number_times = block.getFieldValue('times');
  // TODO: Assemble javascript into code variable.
  var code = `
			for(i=0; i < ${number_times} ; i++){\n
			  ev("moveLeft();") ;\n
			  waitFor(1000);\n
			}; \n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock['haske_var_move_up'] = function(block, generator) {
  var number_times = block.getFieldValue('times');
  // TODO: Assemble javascript into code variable.
  var code = `
			for(i=0; i < ${number_times} ; i++){\n
			  ev("moveUp();") ;\n
			  waitFor(1000);\n
			}; \n
			  `;
  return code;
};

javascript.javascriptGenerator.forBlock['haske_var_move_down'] = function(block, generator) {
  var number_times = block.getFieldValue('times');
  // TODO: Assemble javascript into code variable.
  var code = `
			for(i=0; i < ${number_times} ; i++){\n
			  ev("moveDown();") ;\n
			  waitFor(1000);\n
			}; \n
			  `;
  return code;
};