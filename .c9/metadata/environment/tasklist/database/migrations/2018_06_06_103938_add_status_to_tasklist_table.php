{"changed":true,"filter":false,"title":"2018_06_06_103938_add_status_to_tasklist_table.php","tooltip":"/tasklist/database/migrations/2018_06_06_103938_add_status_to_tasklist_table.php","value":"<?php\n\nuse Illuminate\\Support\\Facades\\Schema;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Database\\Migrations\\Migration;\n\nclass AddStatusToTasklistTable extends Migration\n{\n    /**\n     * Run the migrations.\n     *\n     * @return void\n     */\n    public function up()\n    {\n        Schema::table('tasks', function (Blueprint $table) {\n            $table->string('status');\n        });\n    }\n\n    /**\n     * Reverse the migrations.\n     *\n     * @return void\n     */\n    public function down()\n    {\n        Schema::table('tasks３４', function (Blueprint $table) {\n            //\n        });\n    }\n}\n","undoManager":{"mark":17,"position":18,"stack":[[{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["/"],"id":2},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["/"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["a"],"id":3}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["a"],"id":4}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["$"],"id":5},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["t"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["a"]},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["b"]}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["l"],"id":6},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["e"]},{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["-"]},{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":["?"]}],[{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"remove","lines":["?"],"id":7}],[{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":[">"],"id":8},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["t"],"id":9},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["r"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["i"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["n"]},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["g"]}],[{"start":{"row":16,"column":26},"end":{"row":16,"column":28},"action":"insert","lines":["()"],"id":10}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":29},"action":"insert","lines":["''"],"id":11}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["s"],"id":12},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["t"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["a"]},{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"insert","lines":["t"]},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":["u"]},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["l"],"id":13}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"remove","lines":["l"],"id":14}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":[";"],"id":15}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["s"],"id":16},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["u"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["t"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["a"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["t"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["s"]}],[{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["t"],"id":17},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["a"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["s"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["k"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"remove","lines":["s"],"id":18},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["u"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"remove","lines":["t"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"remove","lines":["a"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"remove","lines":["t"]},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"remove","lines":["s"]}],[{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["t"],"id":19},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["a"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["s"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["k"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":30},"action":"insert","lines":["３４"],"id":21}]]},"ace":{"folds":[],"scrolltop":255.9375,"scrollleft":0,"selection":{"start":{"row":27,"column":28},"end":{"row":27,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528249923453}