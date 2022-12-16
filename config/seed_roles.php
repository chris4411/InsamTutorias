<?php
$ROLES = ['administrator', 'client','webuser', 'livreur', 'vendeur',];
$ROLES_RESTRICT = ['client','webuser', 'livreur', 'vendeur',];

$laratrust_roles = [
    [
        'name' => $ROLES[0],
        'display_name' => $ROLES[0],
        'description' => 'Possede tous les droits',
    ],
    [
        'name' => $ROLES[1],
        'display_name' => $ROLES[1],
        'description' => 'peut acheter des produits et avoir un compte client',
    ],
    [
        'name' => $ROLES[2],
        'display_name' => $ROLES[2],
        'description' => 'Peut consulter les catalogues et gerer son panier',
    ],
    [
        'name' => $ROLES[3],
        'display_name' => $ROLES[3],
        'description' => 'Nothing to do',

    ],
    [
        'name' => $ROLES[4],
        'display_name' => $ROLES[4],
        'description' => 'En plus d\'etre un client il peut gerer ses boutique et se connecter au dashbord',
    ],

];



/**
 *  livreur permissions
 */
$LIVREUR_PERMISSIONS = [];

/**
 *  WEBUSER permissions
 */
$WEBUSER_PERMISSIONS = [
    ...$LIVREUR_PERMISSIONS,
    [
        'name' => 'PRODUCT_SHOP',
        'display_name' => 'PRODUCT_SHOP',
        'description' => 'consulter les catalogue de profuit et en acheter',
        'role' => $ROLES[2]
    ],
    [
        'name' => 'PANIER_MANAGEMENT',
        'display_name' => 'PANIER_MANAGEMENT',
        'description' => 'Peut gerer un panier (ajouter des items, supprimer...)',
        'role' => $ROLES[2]
    ],
];

/**
 * Client permissions
 */
$CLIENT_PERMISSIONS = [
    ...$WEBUSER_PERMISSIONS,
    [
        'name' => 'ACCOUNT_MANAGEMENT',
        'display_name' => 'ACCOUNT_MANAGEMENT',
        'description' => 'Peut creer un compte et le gerer',
        'role' => $ROLES[1]
    ]
];

/**
 *  Vendeur permissions
 */
$VENDEUR_PERMISSIONS = [
    ...$CLIENT_PERMISSIONS,
    [
        'name' => 'BOUTIQUE_MANAGEMENT',
        'display_name' => 'BOUTIQUE_MANAGEMENT',
        'description' => 'Peut gerer une boutique',
        'role' => $ROLES[4]
    ],
    [
        'name' => 'ADMIN_DASHBORD',
        'display_name' => 'ADMIN_DASHBORD',
        'description' => 'Peut se connecter au dashbord et y acceder',
        'role' => $ROLES[4]
    ],
];


/**
 * Administrateur permissions
 */
$ADMINITRATEUR_PERMISSIONS = [
    ...$VENDEUR_PERMISSIONS,
    [
        'name' => 'USER_MANAGEMENT',
        'display_name' => 'USER_MANAGEMENT',
        'description' => 'Gerer les comptes utilisateurs',
        'role' => $ROLES[0]
    ],
    [
        'name' => 'ALL_MARKETS_MANAGEMENT',
        'display_name' => 'ALL_MARKETS_MANAGEMENT',
        'description' => 'Gerer tous les marches de la plateforme',
        'role' => $ROLES[0]
    ],
    [
        'name' => 'PERMISSIONS_MANAGEMENT',
        'display_name' => 'PERMISSIONS_MANAGEMENT',
        'description' => 'Gerer les permission',
        'role' => $ROLES[0]
    ]

];


 /**
 *                LISTE DES ROLES DU SYSTEME
 *============================================================
 *
 */
return [

	'ADMIN_ROLE' => $ROLES[0],
	'CLIENT_ROLE' => $ROLES[1],
	'WEBUSER_ROLE' => $ROLES[2],
	'LIVREUR_ROLE' => $ROLES[3],
	'VENDEUR_ROLE' => $ROLES[4],

    'LARATRUST_ROLES' => $laratrust_roles,
    'PERMISSIONS_LIST' => $ADMINITRATEUR_PERMISSIONS,

    'ROLE_LIST' => $ROLES,
    'RESTRICT_ROLE_LIST' => $ROLES_RESTRICT

];
