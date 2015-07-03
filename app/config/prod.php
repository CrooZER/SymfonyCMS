<?php
$db = parse_url(getenv('CLEARDB_DATABASE_URL'));

$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', getenv('SYMFONY__DATABASE_HOST'));
$container->setParameter('database_port', $db['port']);
$container->setParameter('database_name', getenv('SYMFONY__DATABASE_NAME'));
$container->setParameter('database_user', getenv('SYMFONY__DATABASE_USER'));
$container->setParameter('database_password', getenv('SYMFONY__DATABASE_PASSWORD'));
$container->setParameter('secret', getenv('SECRET'));
$container->setParameter('locale', 'en');
$container->setParameter('mailer_transport', null);
$container->setParameter('mailer_host', null);
$container->setParameter('mailer_user', null);
$container->setParameter('mailer_password', null);