<?php 

$installer=$this;
$installer->startSetup();

$tablename=$installer->getTable('shubhank_feedback_type');
	$table=$installer->getConnection()
	->newTable($tablename)
	->addColumn('type_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,
        array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary'  => true,
        	 ),'Type Id')
    ->addColumn('orderId',Varien_Db_Ddl_Table::TYPE_INTEGER,null,
        array(),
        'Option 1'
        )
    ->addColumn('opt_id_1',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 1'
        )
    ->addColumn('opt_id_2',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 2'
        )
    ->addColumn('opt_id_3',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 3'
        )
    ->addColumn('opt_id_4',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 4'
        )
    ->addColumn('opt_id_5',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 5'
        )
    ->addColumn('opt_id_6',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 6'
        )
    ->addColumn('opt_id_7',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 7'
        )
    ->addColumn('opt_id_8',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 8'
        )
    ->addColumn('opt_id_9',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 9'
        )
    ->addColumn('opt_id_10',Varien_Db_Ddl_Table::TYPE_BOOLEAN,null,
        array(),
        'Option 10'
        )
    ->addColumn('feed',Varien_Db_Ddl_Table::TYPE_TEXT,255,
    	array(),
    	'Comments'
    	)
    ->addColumn('feed_date',Varien_Db_Ddl_Table::TYPE_TIMESTAMP,null,
    	array(),
    	'Feedback Date'
    	);

    $installer->getConnection()->createTable($table);


$tablename=$installer->getTable('shubhank_feedback_options');

$table=$installer->getConnection()
    ->newTable($tablename)
    ->addColumn('id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,
        array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary'  => true,
             ),'Id')
    ->addColumn('options',Varien_Db_Ddl_Table::TYPE_TEXT,255,
        array(),
        'Option'
        );
    
$installer->getConnection()->createTable($table);


$installer->endSetup();


?>