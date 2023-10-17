<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e8c13f85957d80a8c604b685d064f4f
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VariableAnalysis\\' => 17,
        ),
        'R' => 
        array (
            'RobRichards\\XMLSecLibs\\' => 23,
        ),
        'O' => 
        array (
            'OneLogin\\' => 9,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VariableAnalysis\\' => 
        array (
            0 => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis',
        ),
        'RobRichards\\XMLSecLibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/robrichards/xmlseclibs/src',
        ),
        'OneLogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/onelogin/php-saml/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\Plugin' => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src/Plugin.php',
        'OneLogin\\Saml2\\Auth' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Auth.php',
        'OneLogin\\Saml2\\AuthnRequest' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/AuthnRequest.php',
        'OneLogin\\Saml2\\Constants' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Constants.php',
        'OneLogin\\Saml2\\Error' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Error.php',
        'OneLogin\\Saml2\\IdPMetadataParser' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/IdPMetadataParser.php',
        'OneLogin\\Saml2\\LogoutRequest' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/LogoutRequest.php',
        'OneLogin\\Saml2\\LogoutResponse' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/LogoutResponse.php',
        'OneLogin\\Saml2\\Metadata' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Metadata.php',
        'OneLogin\\Saml2\\Response' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Response.php',
        'OneLogin\\Saml2\\Settings' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Settings.php',
        'OneLogin\\Saml2\\Utils' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/Utils.php',
        'OneLogin\\Saml2\\ValidationError' => __DIR__ . '/..' . '/onelogin/php-saml/src/Saml2/ValidationError.php',
        'RobRichards\\XMLSecLibs\\Utils\\XPath' => __DIR__ . '/..' . '/robrichards/xmlseclibs/src/Utils/XPath.php',
        'RobRichards\\XMLSecLibs\\XMLSecEnc' => __DIR__ . '/..' . '/robrichards/xmlseclibs/src/XMLSecEnc.php',
        'RobRichards\\XMLSecLibs\\XMLSecurityDSig' => __DIR__ . '/..' . '/robrichards/xmlseclibs/src/XMLSecurityDSig.php',
        'RobRichards\\XMLSecLibs\\XMLSecurityKey' => __DIR__ . '/..' . '/robrichards/xmlseclibs/src/XMLSecurityKey.php',
        'VariableAnalysis\\Lib\\Constants' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Constants.php',
        'VariableAnalysis\\Lib\\EnumInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/EnumInfo.php',
        'VariableAnalysis\\Lib\\ForLoopInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ForLoopInfo.php',
        'VariableAnalysis\\Lib\\Helpers' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Helpers.php',
        'VariableAnalysis\\Lib\\ScopeInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeInfo.php',
        'VariableAnalysis\\Lib\\ScopeManager' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeManager.php',
        'VariableAnalysis\\Lib\\ScopeType' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeType.php',
        'VariableAnalysis\\Lib\\VariableInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/VariableInfo.php',
        'VariableAnalysis\\Sniffs\\CodeAnalysis\\VariableAnalysisSniff' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Sniffs/CodeAnalysis/VariableAnalysisSniff.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e8c13f85957d80a8c604b685d064f4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e8c13f85957d80a8c604b685d064f4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e8c13f85957d80a8c604b685d064f4f::$classMap;

        }, null, ClassLoader::class);
    }
}
