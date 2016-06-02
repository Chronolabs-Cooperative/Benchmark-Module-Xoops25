<?php

	//xoops_version.php
	//Header information
	define('_MI_BENCHMARK_NAME','Benchmark Tester');
	define('_MI_BENCHMARK_DESC','Benchmark is a module which tests XOOPS and it clones for database performance as well as loading time.');
	
	//Preferences
	define('_MI_BENCHMARK_CREATE_TABLE','Run Create Table Test');
	define('_MI_BENCHMARK_CREATE_TABLE_DESC','Enabling this will run the create table test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_CREATE_TABLE_NUM','How Many Create Table Test per Engine');
	define('_MI_BENCHMARK_CREATE_TABLE_NUM_DESC','Number of times Create table test is ran per engine type.');
	define('_MI_BENCHMARK_ALTER_TABLE','Run Alter Table Test');
	define('_MI_BENCHMARK_ALTER_TABLE_DESC','Enabling this will run the alter table test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_ALTER_TABLE_NUM','How Many Alter Table Test per Engine');
	define('_MI_BENCHMARK_ALTER_TABLE_NUM_DESC','Number of times Alter table test is ran per engine type.');
	define('_MI_BENCHMARK_RENAME_TABLE','Run Rename Table Test per Engine');
	define('_MI_BENCHMARK_RENAME_TABLE_DESC','Enabling this will run the rename table test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_RENAME_TABLE_NUM','How Many Rename Table Test per Engine');
	define('_MI_BENCHMARK_RENAME_TABLE_NUM_DESC','Number of times rename table test is ran per engine type.');
	define('_MI_BENCHMARK_INSERT_RECORDS','Run Insert Record Test per Engine');
	define('_MI_BENCHMARK_INSERT_RECORDS_DESC','Enabling this will run the insert record test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_INSERT_RECORDS_NUM','How Many Insert Records should be done per Engine as well as used in other tests.');
	define('_MI_BENCHMARK_INSERT_RECORDS_NUM_DESC','Number of times insert record test is ran per engine type.');
	define('_MI_BENCHMARK_DELETE_RECORDS','Run Delete Records Test per Engine');
	define('_MI_BENCHMARK_DELETE_RECORDS_DESC','Enabling this will run the delete records test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_DELETE_RECORDS_NUM','How Many Delete Records Test per Engine');
	define('_MI_BENCHMARK_DELETE_RECORDS_NUM_DESC','Number of times delete records test is ran per engine type.');
	define('_MI_BENCHMARK_DELETE_ALL_RECORDS','Run Delete All Test per Engine');
	define('_MI_BENCHMARK_DELETE_ALL_RECORDS_DESC','Enabling this will run the delete all test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_DELETE_ALL_RECORDS_NUM','How Many Delete All Test per Engine');
	define('_MI_BENCHMARK_DELETE_ALL_RECORDS_NUM_DESC','Number of times delete all test is ran per engine type.');
	define('_MI_BENCHMARK_SELECT_RECORDS','Run Select Records Test per Engine');
	define('_MI_BENCHMARK_SELECT_RECORDS_DESC','Enabling this will run the select records test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_SELECT_RECORDS_NUM','How Many select records Test per Engine');
	define('_MI_BENCHMARK_SELECT_RECORDS_NUM_DESC','Number of times select records test is ran per engine type.');
	define('_MI_BENCHMARK_UPDATE_RECORDS','Run Update Records Test per Engine');
	define('_MI_BENCHMARK_UPDATE_RECORDS_DESC','Enabling this will run the delete records test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_UPDATE_RECORDS_NUM','How Many Update Records Test per Engine');
	define('_MI_BENCHMARK_UPDATE_RECORDS_NUM_DESC','Number of times delete records test is ran per engine type.');
	define('_MI_BENCHMARK_UPDATE_ALL_RECORDS','Run Update All Test per Engine');
	define('_MI_BENCHMARK_UPDATE_ALL_RECORDS_DESC','Enabling this will run the delete all test over the number of engines selected for testing.');
	define('_MI_BENCHMARK_UPDATE_ALL_RECORDS_NUM','How Many Update All Test per Engine');
	define('_MI_BENCHMARK_UPDATE_ALL_RECORDS_NUM_DESC','Number of times delete all test is ran per engine type.');
	define('_MI_BENCHMARK_SMARTY','Run Smarty User Interface Render Test');
	define('_MI_BENCHMARK_SMARTY_DESC','Enabling this will run the smarty interface render test over the number of times specified.');
	define('_MI_BENCHMARK_SMARTY_NUM','How Many Smarty User Interface Render Test');
	define('_MI_BENCHMARK_SMARTY_NUM_DESC','Number of times Smarty User Interface Render Test test is ran.');
	define('_MI_BENCHMARK_TEST_ENGINES','MySQL Table Engine Types to test');
	define('_MI_BENCHMARK_TEST_ENGINES_DESC','Select the engine types your benchmark is interested in, you must select at least one or the default is used!');
	define('_MI_BENCHMARK_TEST_CHARSET','MySQL table character set to test');
	define('_MI_BENCHMARK_TEST_CHARSET_DESC','Specify the character set to test for the tables on mysql, don\'t forget to specify your characters below to use');
	define('_MI_BENCHMARK_TEST_CHARACTERS','Chracters to use in testing');
	define('_MI_BENCHMARK_TEST_CHARACTERS_DESC','These are the characters to use in testing text fields. (seperate with a pipe "|")');
	define('_MI_BENCHMARK_TEST_NUMBERS','Numbers to use in testing');
	define('_MI_BENCHMARK_TEST_NUMBERS_DESC','Specify the number and then equals the word for the number for numeric and enumeration fields (seperate with a pipe "|"). ie. 0=zero|1=one');
	define('_MI_BENCHMARK_FIELD_TYPES','Field types to test');
	define('_MI_BENCHMARK_FIELD_TYPES_DESC','Specify the field types you want to test, if you don\'t select any all will be used!');
	define('_MI_BENCHMARK_TEST_SPECTRUM','Testing spectrum');
	define('_MI_BENCHMARK_TEST_SPECTRUM_DESC','Field spectrum for testing, either one of each then random or a random selection of all to the number of fields specified.');
	define('_MI_BENCHMARK_FIELDS_NUM','Number of fields to use in a testing table');
	define('_MI_BENCHMARK_FIELDS_NUM_DESC','Specify the number of fields used in a testing environment.');
	define('_MI_BENCHMARK_TABLE_NAME','Prefix for a testing table in the benchmark!');
	define('_MI_BENCHMARK_TABLE_NAME_DESC','Prefix for a testing tahble in the benchmark');
	define('_MI_BENCHMARK_ALTER_TABLE_RECORDS','How Many Alter Table Records are to be populare in the table');
	define('_MI_BENCHMARK_ALTER_TABLE_RECORDS_DESC','Number of records in a table for an Alter table test is ran per engine type.');
	define('_MI_BENCHMARK_RENAME_TESTS_NUM','How Many Rename Table Test per Engine');
	define('_MI_BENCHMARK_RENAME_TESTS_NUM_DESC','Number of times rename table test is ran per engine type.');
	define('_MI_BENCHMARK_INSERT_TESTS_NUM','How Many Insert Tests should be done per Engine as well as used in other tests.');
	define('_MI_BENCHMARK_INSERT_TESTS_NUM_DESC','Number of times insert record test is ran per engine type.');
	define('_MI_BENCHMARK_DELETE_TESTS_NUM','How Many Delete Tests per Engine');
	define('_MI_BENCHMARK_DELETE_TESTS_NUM_DESC','Number of times delete records test is ran per engine type.');
	define('_MI_BENCHMARK_DELETE_ALL_TESTS_NUM','How Many Delete All Test per Engine');
	define('_MI_BENCHMARK_DELETE_ALL_TESTS_NUM_DESC','Number of times delete all test is ran per engine type.');
	define('_MI_BENCHMARK_SELECT_TESTS_NUM','How Many select records Test per Engine');
	define('_MI_BENCHMARK_SELECT_TESTS_NUM_DESC','Number of times select records test is ran per engine type.');
	define('_MI_BENCHMARK_UPDATE_TESTS_NUM','How Many Update Records Test per Engine');
	define('_MI_BENCHMARK_UPDATE_TESTS_NUM_DESC','Number of times delete records test is ran per engine type.');
	define('_MI_BENCHMARK_UPDATE_ALL_TESTS_NUM','How Many Update All Test per Engine');
	define('_MI_BENCHMARK_UPDATE_ALL_TESTS_NUM_DESC','Number of times delete all test is ran per engine type.');
	define('_MI_BENCHMARK_SMARTY_TESTS_NUM','How Many Smarty Render Test to run');
	define('_MI_BENCHMARK_SMARTY_TESTS_NUM_DESC','Number of times Smarty User Interface Render Test test is ran.');
	define('_MI_BENCHMARK_MEMORY_FOR_CRON','How much memory is allocated to the cron & application when executing');
	define('_MI_BENCHMARK_MEMORY_FOR_CRON_DESC','The amount of memory set by memory_limit in the PHP Ini File.');
	define('_MI_BENCHMARK_SECONDS_FOR_CRON','How Many Seconds a cron will run before timing out');
	define('_MI_BENCHMARK_SECONDS_FOR_CRON_DESC','Number of seconds a session of the cron can run for at maximum.');
	define('_MI_BENCHMARK_INTERVAL_OF_CRON','Interval of Cron Job');
	define('_MI_BENCHMARK_INTERVAL_OF_CRON_DESC','Amount of second between execution of a cron job.');
	define('_MI_BENCHMARK_EMAIL_ADDRESSES','Send Benchmarking Email Notices to (Sepeate with a pipe "|")');
	define('_MI_BENCHMARK_EMAIL_ADDRESSES_DESC','Who to send benchmarking email notices to (Sepeate with a pipe "|")');
	define('_MI_BENCHMARK_EDITOR','Select the editor you wish to use');
	define('_MI_BENCHMARK_EDITOR_DESC','This is the editor you wish to use for notes.');
	define('_MI_BENCHMARK_SEND_EMAIL','Enables Email Notifications to be Sent');
	define('_MI_BENCHMARK_SEND_EMAIL_DESC','When stages of the bench testing are done an email will be sent to the addresses above.');
	define('_MI_BENCHMARK_STEP_NEW_BEGIN','Beginning will be defaulted this many seconds ahead of time');
	define('_MI_BENCHMARK_STEP_NEW_BEGIN_DESC','Benchmarking will beginning by default this many seconds ahead of time.');
	
	//preference options
	define('_MI_BENCHMARK_TEST_ENGINES_INNODB','Test MySQL InnoDB Engine Type');
	define('_MI_BENCHMARK_TEST_ENGINES_MYISAM','Test MySQL MyISAM Engine Type');
	define('_MI_BENCHMARK_TEST_SPECTRUM_RANDOM','Select field types on a random basis');
	define('_MI_BENCHMARK_TEST_SPECTRUM_EACH','Use one of each then random');
	define('_MI_BENCHMARK_TEST_CHARACTERS_DEFAULT','a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q|r|s|t|u|v|w|x|y|z|'.strtoupper('a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q|r|s|t|u|v|w|x|y|z').'| |-|=|_|+|\|?|/|.|,|<|>|:|;|\'|"|{|}|[|]|)|(|*|&|^|%|$|#|@|!|~|`');
	define('_MI_BENCHMARK_TEST_NUMBERS_DEFAULT','0=zero|1=one|2=two|3=three|4=four|5=five|6=six|7=seven|8=eight|9=nine');
	
	//Enumeration
	define('_MI_BENCHMARK_WAIT','Waiting');
	define('_MI_BENCHMARK_PREPARED','Preparing');
	define('_MI_BENCHMARK_TESTING','Testing');
	define('_MI_BENCHMARK_CLEANUP','Cleanup');
	define('_MI_BENCHMARK_FINISHED','Finished');
	define('_MI_BENCHMARK_CREATE','Benchmark Create Table');
	define('_MI_BENCHMARK_SELECT','Benchmark Select All');
	define('_MI_BENCHMARK_INSERT','Benchmark Insert');
	define('_MI_BENCHMARK_UPDATE','Benchmark Update');
	define('_MI_BENCHMARK_UPDATEALL','Benchmark Update All');
	define('_MI_BENCHMARK_DELETE','Benchmark Delete Individually');
	define('_MI_BENCHMARK_DELETEALL','Benchmark Delete All');
	define('_MI_BENCHMARK_ALTER','Benchmark Alter Tabls');
	define('_MI_BENCHMARK_RENAME','Benchmark Rename Tables');
	define('_MI_BENCHMARK_SMARTY','Benchmark Smarty');
	define('_MI_BENCHMARK_XOOPS24','XOOPS 2.4.x');
	define('_MI_BENCHMARK_XOOPS25','XOOPS 2.5.x');
	define('_MI_BENCHMARK_XOOPS26','XOOPS 2.6.x');
	define('_MI_BENCHMARK_XOOPS27','XOOPS 2.7.x');
	define('_MI_BENCHMARK_XOOPS28','XOOPS 2.8.x');
	define('_MI_BENCHMARK_XOOPS29','XOOPS 2.9.x');
	define('_MI_BENCHMARK_XOOPS30','XOOPS 3.0.x');
	define('_MI_BENCHMARK_XOOPS31','XOOPS 3.1.x');
	define('_MI_BENCHMARK_XOOPSCUBE','XoopsCube');
	define('_MI_BENCHMARK_ICMS','ImpressCMS');

	//Table names for testing types
	define('_MI_BENCHMARK_CREATE_TABLENAME','create');
	define('_MI_BENCHMARK_SELECT_TABLENAME','select');
	define('_MI_BENCHMARK_INSERT_TABLENAME','insert');
	define('_MI_BENCHMARK_UPDATE_TABLENAME','update');
	define('_MI_BENCHMARK_UPDATEALL_TABLENAME','update_all');
	define('_MI_BENCHMARK_DELETE_TABLENAME','delete');
	define('_MI_BENCHMARK_DELETEALL_TABLENAME','delete_all');
	define('_MI_BENCHMARK_ALTER_TABLENAME','alter');
	define('_MI_BENCHMARK_RENAME_TABLENAME','rename');
	define('_MI_BENCHMARK_SMARTY_TABLENAME','smarty');
	
	//Field Pointers (Do not change unless you know what you are doing!)
	define('_MI_BENCHMARK_CREATE_COUNT','tests_ran_create');
    define('_MI_BENCHMARK_SELECT_COUNT','tests_ran_select');
    define('_MI_BENCHMARK_INSERT_COUNT','tests_ran_insert');
    define('_MI_BENCHMARK_UPDATE_COUNT','tests_ran_update');
    define('_MI_BENCHMARK_UPDATEALL_COUNT','tests_ran_updateall');
    define('_MI_BENCHMARK_DELETE_COUNT','tests_ran_delete');
    define('_MI_BENCHMARK_DELETEALL_COUNT','tests_ran_deleteall');
    define('_MI_BENCHMARK_ALTER_COUNT','tests_ran_alter');
    define('_MI_BENCHMARK_RENAME_COUNT','tests_ran_rename');
    define('_MI_BENCHMARK_SMARTY_COUNT','tests_ran_smarty');    					
    
    define('_MI_BENCHMARK_CREATE_SUMDIFF','took_create_seconds');
    define('_MI_BENCHMARK_SELECT_SUMDIFF','took_select_seconds');
    define('_MI_BENCHMARK_INSERT_SUMDIFF','took_insert_seconds');
    define('_MI_BENCHMARK_UPDATE_SUMDIFF','took_update_seconds');
    define('_MI_BENCHMARK_UPDATEALL_SUMDIFF','took_updateall_seconds');
    define('_MI_BENCHMARK_DELETE_SUMDIFF','took_delete_seconds');
    define('_MI_BENCHMARK_DELETEALL_SUMDIFF','took_deleteall_seconds');
    define('_MI_BENCHMARK_ALTER_SUMDIFF','took_alter_time');
    define('_MI_BENCHMARK_RENAME_SUMDIFF','took_rename_time');
    define('_MI_BENCHMARK_SMARTY_SUMDIFF','took_smarty_time');    					
    define('_MI_BENCHMARK_CREATE_AVGDIFF','avg_create_time');
    define('_MI_BENCHMARK_SELECT_AVGDIFF','avg_select_time');
    define('_MI_BENCHMARK_INSERT_AVGDIFF','avg_insert_time');
    define('_MI_BENCHMARK_UPDATE_AVGDIFF','avg_update_time');
    define('_MI_BENCHMARK_UPDATEALL_AVGDIFF','avg_updateall_time');
    define('_MI_BENCHMARK_DELETE_AVGDIFF','avg_delete_time');
    define('_MI_BENCHMARK_DELETEALL_AVGDIFF','avg_deleteall_time');
    define('_MI_BENCHMARK_ALTER_AVGDIFF','avg_alter_time');
    define('_MI_BENCHMARK_RENAME_AVGDIFF','avg_rename_time');
    define('_MI_BENCHMARK_SMARTY_AVGDIFF','avg_smarty_time');    					
    define('_MI_BENCHMARK_CREATE_MAXDIFF','max_create_time');
    define('_MI_BENCHMARK_SELECT_MAXDIFF','max_select_time');
    define('_MI_BENCHMARK_INSERT_MAXDIFF','max_insert_time');
    define('_MI_BENCHMARK_UPDATE_MAXDIFF','max_update_time');
    define('_MI_BENCHMARK_UPDATEALL_MAXDIFF','max_updateall_time');
    define('_MI_BENCHMARK_DELETE_MAXDIFF','max_delete_time');
    define('_MI_BENCHMARK_DELETEALL_MAXDIFF','max_deleteall_time');
    define('_MI_BENCHMARK_ALTER_MAXDIFF','max_alter_time');
    define('_MI_BENCHMARK_RENAME_MAXDIFF','max_rename_time');
    define('_MI_BENCHMARK_SMARTY_MAXDIFF','max_smarty_time');    					
    define('_MI_BENCHMARK_CREATE_MINDIFF','min_create_time');
    define('_MI_BENCHMARK_SELECT_MINDIFF','min_select_time');
    define('_MI_BENCHMARK_INSERT_MINDIFF','min_insert_time');
    define('_MI_BENCHMARK_UPDATE_MINDIFF','min_update_time');
    define('_MI_BENCHMARK_UPDATEALL_MINDIFF','min_updateall_time');
    define('_MI_BENCHMARK_DELETE_MINDIFF','min_delete_time');
    define('_MI_BENCHMARK_DELETEALL_MINDIFF','min_deleteall_time');
    define('_MI_BENCHMARK_ALTER_MINDIFF','min_alter_time');
    define('_MI_BENCHMARK_RENAME_MINDIFF','min_rename_time');
    define('_MI_BENCHMARK_SMARTY_MINDIFF','min_smarty_time');    					
    
    define('_MI_BENCHMARK_CREATE_SUMLEN','sum_create_data_length');
    define('_MI_BENCHMARK_SELECT_SUMLEN','sum_select_data_length');
    define('_MI_BENCHMARK_INSERT_SUMLEN','sum_insert_data_length');
    define('_MI_BENCHMARK_UPDATE_SUMLEN','sum_update_data_length');
    define('_MI_BENCHMARK_UPDATEALL_SUMLEN','sum_updateall_data_length');
    define('_MI_BENCHMARK_DELETE_SUMLEN','sum_delete_data_length');
    define('_MI_BENCHMARK_DELETEALL_SUMLEN','sum_deleteall_data_length');
    define('_MI_BENCHMARK_ALTER_SUMLEN','sum_alter_data_length');
    define('_MI_BENCHMARK_RENAME_SUMLEN','sum_rename_data_length');
    define('_MI_BENCHMARK_SMARTY_SUMLEN','sum_smarty_data_length');    					
    define('_MI_BENCHMARK_CREATE_AVGLEN','avg_create_data_length');
    define('_MI_BENCHMARK_SELECT_AVGLEN','avg_select_data_length');
    define('_MI_BENCHMARK_INSERT_AVGLEN','avg_insert_data_length');
    define('_MI_BENCHMARK_UPDATE_AVGLEN','avg_update_data_length');
    define('_MI_BENCHMARK_UPDATEALL_AVGLEN','avg_updateall_data_length');
    define('_MI_BENCHMARK_DELETE_AVGLEN','avg_delete_data_length');
    define('_MI_BENCHMARK_DELETEALL_AVGLEN','avg_deleteall_data_length');
    define('_MI_BENCHMARK_ALTER_AVGLEN','avg_alter_data_length');
    define('_MI_BENCHMARK_RENAME_AVGLEN','avg_rename_data_length');
    define('_MI_BENCHMARK_SMARTY_AVGLEN','avg_smarty_data_length');    					
    define('_MI_BENCHMARK_CREATE_MAXLEN','max_create_data_length');
    define('_MI_BENCHMARK_SELECT_MAXLEN','max_select_data_length');
    define('_MI_BENCHMARK_INSERT_MAXLEN','max_insert_data_length');
    define('_MI_BENCHMARK_UPDATE_MAXLEN','max_update_data_length');
    define('_MI_BENCHMARK_UPDATEALL_MAXLEN','max_updateall_data_length');
    define('_MI_BENCHMARK_DELETE_MAXLEN','max_delete_data_length');
    define('_MI_BENCHMARK_DELETEALL_MAXLEN','max_deleteall_data_length');
    define('_MI_BENCHMARK_ALTER_MAXLEN','max_alter_data_length');
    define('_MI_BENCHMARK_RENAME_MAXLEN','max_rename_data_length');
    define('_MI_BENCHMARK_SMARTY_MAXLEN','max_smarty_data_length');    					
    define('_MI_BENCHMARK_CREATE_MINLEN','min_create_data_length');
    define('_MI_BENCHMARK_SELECT_MINLEN','min_select_data_length');
    define('_MI_BENCHMARK_INSERT_MINLEN','min_insert_data_length');
    define('_MI_BENCHMARK_UPDATE_MINLEN','min_update_data_length');
    define('_MI_BENCHMARK_UPDATEALL_MINLEN','min_updateall_data_length');
    define('_MI_BENCHMARK_DELETE_MINLEN','min_delete_data_length');
    define('_MI_BENCHMARK_DELETEALL_MINLEN','min_deleteall_data_length');
    define('_MI_BENCHMARK_ALTER_MINLEN','min_alter_data_length');
    define('_MI_BENCHMARK_RENAME_MINLEN','min_rename_data_length');
    define('_MI_BENCHMARK_SMARTY_MINLEN','min_smarty_data_length');    					
    
    define('_MI_BENCHMARK_CREATE_SUMFIELD','sum_create_fields');
    define('_MI_BENCHMARK_SELECT_SUMFIELD','sum_select_fields');
    define('_MI_BENCHMARK_INSERT_SUMFIELD','sum_insert_fields');
    define('_MI_BENCHMARK_UPDATE_SUMFIELD','sum_update_fields');
    define('_MI_BENCHMARK_UPDATEALL_SUMFIELD','sum_updateall_fields');
    define('_MI_BENCHMARK_DELETE_SUMFIELD','sum_delete_fields');
    define('_MI_BENCHMARK_DELETEALL_SUMFIELD','sum_deleteall_fields');
    define('_MI_BENCHMARK_ALTER_SUMFIELD','sum_alter_fields');
    define('_MI_BENCHMARK_RENAME_SUMFIELD','sum_rename_fields');
    define('_MI_BENCHMARK_SMARTY_SUMFIELD','sum_smarty_fields');    					
    define('_MI_BENCHMARK_CREATE_AVGFIELD','avg_create_fields');
    define('_MI_BENCHMARK_SELECT_AVGFIELD','avg_select_fields');
    define('_MI_BENCHMARK_INSERT_AVGFIELD','avg_insert_fields');
    define('_MI_BENCHMARK_UPDATE_AVGFIELD','avg_update_fields');
    define('_MI_BENCHMARK_UPDATEALL_AVGFIELD','avg_updateall_fields');
    define('_MI_BENCHMARK_DELETE_AVGFIELD','avg_delete_fields');
    define('_MI_BENCHMARK_DELETEALL_AVGFIELD','avg_deleteall_fields');
    define('_MI_BENCHMARK_ALTER_AVGFIELD','avg_alter_fields');
    define('_MI_BENCHMARK_RENAME_AVGFIELD','avg_rename_fields');
    define('_MI_BENCHMARK_SMARTY_AVGFIELD','avg_smarty_fields');    					
    define('_MI_BENCHMARK_CREATE_MAXFIELD','max_create_fields');
    define('_MI_BENCHMARK_SELECT_MAXFIELD','max_select_fields');
    define('_MI_BENCHMARK_INSERT_MAXFIELD','max_insert_fields');
    define('_MI_BENCHMARK_UPDATE_MAXFIELD','max_update_fields');
    define('_MI_BENCHMARK_UPDATEALL_MAXFIELD','max_updateall_fields');
    define('_MI_BENCHMARK_DELETE_MAXFIELD','max_delete_fields');
    define('_MI_BENCHMARK_DELETEALL_MAXFIELD','max_deleteall_fields');
    define('_MI_BENCHMARK_ALTER_MAXFIELD','max_alter_fields');
    define('_MI_BENCHMARK_RENAME_MAXFIELD','max_rename_fields');
    define('_MI_BENCHMARK_SMARTY_MAXFIELD','max_smarty_fields');    					
    define('_MI_BENCHMARK_CREATE_MINFIELD','min_create_fields');
    define('_MI_BENCHMARK_SELECT_MINFIELD','min_select_fields');
    define('_MI_BENCHMARK_INSERT_MINFIELD','min_insert_fields');
    define('_MI_BENCHMARK_UPDATE_MINFIELD','min_update_fields');
    define('_MI_BENCHMARK_UPDATEALL_MINFIELD','min_updateall_fields');
    define('_MI_BENCHMARK_DELETE_MINFIELD','min_delete_fields');
    define('_MI_BENCHMARK_DELETEALL_MINFIELD','min_deleteall_fields');
    define('_MI_BENCHMARK_ALTER_MINFIELD','min_alter_fields');
    define('_MI_BENCHMARK_RENAME_MINFIELD','min_rename_fields');
    define('_MI_BENCHMARK_SMARTY_MINFIELD','min_smarty_fields');    					
        
    define('_MI_BENCHMARK_CREATE_SUMREC','sum_create_records');
    define('_MI_BENCHMARK_SELECT_SUMREC','sum_select_records');
    define('_MI_BENCHMARK_INSERT_SUMREC','sum_insert_records');
    define('_MI_BENCHMARK_UPDATE_SUMREC','sum_update_records');
    define('_MI_BENCHMARK_UPDATEALL_SUMREC','sum_updateall_records');
    define('_MI_BENCHMARK_DELETE_SUMREC','sum_delete_records');
    define('_MI_BENCHMARK_DELETEALL_SUMREC','sum_deleteall_records');
    define('_MI_BENCHMARK_ALTER_SUMREC','sum_alter_records');
    define('_MI_BENCHMARK_RENAME_SUMREC','sum_rename_records');
    define('_MI_BENCHMARK_SMARTY_SUMREC','sum_smarty_records');    					
    define('_MI_BENCHMARK_CREATE_AVGREC','avg_create_records');
    define('_MI_BENCHMARK_SELECT_AVGREC','avg_select_records');
    define('_MI_BENCHMARK_INSERT_AVGREC','avg_insert_records');
    define('_MI_BENCHMARK_UPDATE_AVGREC','avg_update_records');
    define('_MI_BENCHMARK_UPDATEALL_AVGREC','avg_updateall_records');
    define('_MI_BENCHMARK_DELETE_AVGREC','avg_delete_records');
    define('_MI_BENCHMARK_DELETEALL_AVGREC','avg_deleteall_records');
    define('_MI_BENCHMARK_ALTER_AVGREC','avg_alter_records');
    define('_MI_BENCHMARK_RENAME_AVGREC','avg_rename_records');
    define('_MI_BENCHMARK_SMARTY_AVGREC','avg_smarty_records');    					
    define('_MI_BENCHMARK_CREATE_MAXREC','max_create_records');
    define('_MI_BENCHMARK_SELECT_MAXREC','max_select_records');
    define('_MI_BENCHMARK_INSERT_MAXREC','max_insert_records');
    define('_MI_BENCHMARK_UPDATE_MAXREC','max_update_records');
    define('_MI_BENCHMARK_UPDATEALL_MAXREC','max_updateall_records');
    define('_MI_BENCHMARK_DELETE_MAXREC','max_delete_records');
    define('_MI_BENCHMARK_DELETEALL_MAXREC','max_deleteall_records');
    define('_MI_BENCHMARK_ALTER_MAXREC','max_alter_records');
    define('_MI_BENCHMARK_RENAME_MAXREC','max_rename_records');
    define('_MI_BENCHMARK_SMARTY_MAXREC','max_smarty_records');    					
    define('_MI_BENCHMARK_CREATE_MINREC','min_create_records');
    define('_MI_BENCHMARK_SELECT_MINREC','min_select_records');
    define('_MI_BENCHMARK_INSERT_MINREC','min_insert_records');
    define('_MI_BENCHMARK_UPDATE_MINREC','min_update_records');
    define('_MI_BENCHMARK_UPDATEALL_MINREC','min_updateall_records');
    define('_MI_BENCHMARK_DELETE_MINREC','min_delete_records');
    define('_MI_BENCHMARK_DELETEALL_MINREC','min_deleteall_records');
    define('_MI_BENCHMARK_ALTER_MINREC','min_alter_records');
    define('_MI_BENCHMARK_RENAME_MINREC','min_rename_records');
    define('_MI_BENCHMARK_SMARTY_MINREC','min_smarty_records');
   
    define('_MI_BENCHMARK_CREATE_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_SELECT_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_INSERT_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_UPDATE_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_UPDATEALL_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_DELETE_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_DELETEALL_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_ALTER_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_RENAME_SUMCOMMON','took_common_seconds');
    define('_MI_BENCHMARK_SMARTY_SUMCOMMON','took_common_seconds');    					
    define('_MI_BENCHMARK_CREATE_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_SELECT_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_INSERT_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_UPDATE_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_UPDATEALL_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_DELETE_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_DELETEALL_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_ALTER_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_RENAME_AVGCOMMON','avg_common_seconds');
    define('_MI_BENCHMARK_SMARTY_AVGCOMMON','avg_common_seconds');    					
    define('_MI_BENCHMARK_CREATE_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_SELECT_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_INSERT_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_UPDATE_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_UPDATEALL_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_DELETE_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_DELETEALL_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_ALTER_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_RENAME_MAXCOMMON','max_common_seconds');
    define('_MI_BENCHMARK_SMARTY_MAXCOMMON','max_common_seconds');    					
    define('_MI_BENCHMARK_CREATE_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_SELECT_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_INSERT_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_UPDATE_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_UPDATEALL_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_DELETE_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_DELETEALL_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_ALTER_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_RENAME_MINCOMMON','min_common_seconds');
    define('_MI_BENCHMARK_SMARTY_MINCOMMON','min_common_seconds');    					
    define('_MI_BENCHMARK_CREATE_MINCOMMON','min_common_seconds');
    
    define('_MI_BENCHMARK_CREATE_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_SELECT_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_INSERT_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_UPDATE_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_UPDATEALL_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_DELETE_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_DELETEALL_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_ALTER_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_RENAME_SUMBOOT','took_boot_seconds');
    define('_MI_BENCHMARK_SMARTY_SUMBOOT','took_boot_seconds');    					
    define('_MI_BENCHMARK_CREATE_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_SELECT_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_INSERT_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_UPDATE_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_UPDATEALL_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_DELETE_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_DELETEALL_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_ALTER_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_RENAME_AVGBOOT','avg_boot_seconds');
    define('_MI_BENCHMARK_SMARTY_AVGBOOT','avg_boot_seconds');    					
    define('_MI_BENCHMARK_CREATE_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_SELECT_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_INSERT_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_UPDATE_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_UPDATEALL_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_DELETE_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_DELETEALL_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_ALTER_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_RENAME_MAXBOOT','max_boot_seconds');
    define('_MI_BENCHMARK_SMARTY_MAXBOOT','max_boot_seconds');    					
    define('_MI_BENCHMARK_CREATE_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_SELECT_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_INSERT_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_UPDATE_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_UPDATEALL_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_DELETE_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_DELETEALL_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_ALTER_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_RENAME_MINBOOT','min_boot_seconds');
    define('_MI_BENCHMARK_SMARTY_MINBOOT','min_boot_seconds');    					
    define('_MI_BENCHMARK_CREATE_MINBOOT','min_boot_seconds');
	
    //Version 1.03
    //User menu
    define('_MI_BENCHMARK_MM1','List Tests');
    define('_MI_BENCHMARK_MM2','New Test');
    define('_MI_BENCHMARK_MM3','Results');
    define('_MI_BENCHMARK_MM4','List Fields');
    define('_MI_BENCHMARK_MM5','New Field');
    
    //Admin Menu
    define('_MI_BENCHMARK_ADMINMENU1','Preferences');
    
    //Version 1.07
    //Preferences
    define('_MI_BENCHMARK_ALTER_TABLE_TESTS','Number of Alter Table tests to run');
    define('_MI_BENCHMARK_ALTER_TABLE_TESTS_DESC','This is the number of Alter Table tests to run.');
    define('_MI_BENCHMARK_RENAME_TABLE_TESTS','Number of Rename Table tests to run');
    define('_MI_BENCHMARK_RENAME_TABLE_TESTS_DESC','This is the number of Rename Table tests to run.');
    define('_MI_BENCHMARK_CREATE_TABLE_TESTS','Number of Create Table tests to run');
    define('_MI_BENCHMARK_CREATE_TABLE_TESTS_DESC','This is the number of Create Table tests to run.');
    
    //Version 1.08
    //Preferences
    define('_MI_BENCHMARK_FIELDS_RANDOM','Add random number of fields to field number?');
    define('_MI_BENCHMARK_FIELDS_RANDOM_DESC','If you enable this option a number of fields will be added to the field number specified above.');
    define('_MI_BENCHMARK_FIELDS_RANDOM_MINIMUM','Random minimum for fields');
    define('_MI_BENCHMARK_FIELDS_RANDOM_MINIMUM_DESC','This is the number of the smallest amount of fields added to in the random selection.');
    define('_MI_BENCHMARK_FIELDS_RANDOM_MAXIMUM','Random maximum for fields');
    define('_MI_BENCHMARK_FIELDS_RANDOM_MAXIMUM_DESC','This is the number of the highest amount of fields added to in the random selection.');
    define('_MI_BENCHMARK_RECORDS_RANDOM','Add random number of records to record number?');
    define('_MI_BENCHMARK_RECORDS_RANDOM_DESC','If you enable this option a number of records will be added to the record number specified above.');
    define('_MI_BENCHMARK_RECORDS_RANDOM_MINIMUM','Random minimum for records');
    define('_MI_BENCHMARK_RECORDS_RANDOM_MINIMUM_DESC','This is the number of the smallest amount of records added to in the random selection.');
    define('_MI_BENCHMARK_RECORDS_RANDOM_MAXIMUM','Random maximum for records');
    define('_MI_BENCHMARK_RECORDS_RANDOM_MAXIMUM_DESC','This is the number of the highest amount of records added to in the random selection.');
?>