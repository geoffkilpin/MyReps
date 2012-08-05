<?php $xmlArray = array(
    'project' => array(
        '@id' => 1,
        'name' => 'Name of project, as tag',
        '@' => 'Value of project'
    )
);
$xmlObject = Xml::fromArray($xmlArray);
echo $xmlString = $xmlObject->asXML(); ?>
