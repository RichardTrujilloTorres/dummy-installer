

table specification through notation (dot/yaml)


Tasks overview: 

	- create
	- populate 


Operations:
	- run
	- reverse/undo




Operation (\Installer\Operation::class):
	name
	function/callable (the actual task)
	function/callable (the undo task, if reversible)





// AUTO INCREMENT=
 $statement = "ALTER TABLE MY_TABLE AUTO_INCREMENT = 111111;";
        DB::unprepared($statement);