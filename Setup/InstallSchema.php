<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 12:43 PM
 * File: InstallSchema.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'ebizmarts_abandonedcart_counter',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Abandoned Cart Counter'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'ebizmarts_abandonedcart_flag',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Abandoned Cart Flag'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'ebizmarts_abandonedcart_token',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length'    => 128,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Abandoned Cart Flag'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'ebizmarts_abandonedcart_flag',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Abandoned Cart Flag'
            ]
        );
        $table  = $installer->getConnection()
            ->newTable($installer->getTable('abandonedcart_popup'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Popup Id'
            )
            ->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                128,
                ['nullable'=>true,'default'=>null],
                'Popup Email'
            )
            ->addColumn(
                'updated_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable'=>true,'default'=>null],
                'Popup Id'
            )
            ->addColumn(
                'counter',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                10,
                ['nullable'=>true,'default'=>null],
                'Popup Counter'
            )
            ->addColumn(
                'processed',
                \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                null,
                ['nullable'=>false,'default'=>'0'],
                'Popup Processed'
            )
            ->setComment('Sent mails via Mandrill');
        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}