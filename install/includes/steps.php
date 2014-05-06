<?php

// The $steps array below contains the exact copy of the steps
// in our online demo at http://www.phpsetupwizard.com/demo
// We left it to help you understand how PHP Setup Wizard works
// Feel free to change it as necessary or simply clean it up and
// create your own $steps array to suit your needs. Enjoy!

$steps = array(

	// Step 1
	array(
		// Step name
		'name' => 'Seleziona Lingua',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Per cominciare, seleziona la lingua e clicca su Next.',
			),

			// Language selection drop down box
			// PHP Setup wizard will automatically scan for available languages and display them
			array(
				'type' => 'language',
				'label' => 'Lingua',
				'name' => 'language',
			),
		),
	),

	// Step 2
	array(
		// Step name
		'name' => 'Verifica Licenza',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Benvenuto nel wizard di installazione di IntSE.
				Questa procedura guidata automatica vi aiuterà a ottenere il sistema installato e funzionante in appena un paio di minuti.
				Si prega di inserire il numero di licenza per il software che si possono trovare nella zona client sul nostro sito.',
			),
			array(
				'type' => 'info',
				'value' => 'Il codice ricevuto dovrebbe avere questo formato: 1234-1234-1234-1234',
			),

			// Text box
			array(
				'type' => 'text',
				'label' => 'Codice Seriale',
				'name' => 'license_number',
				'attributes' => array('class' => 'medium'),
				'default' => '',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
					array(
						'rule' => 'validate_license', // run "validate_license" function the "includes/validation.php" file upon form submission
						'error' => 'In Numero Seriale sembra non essere corretto.'
					),
				),
			),
		),
	),

	// Step 3
	array(
		// Step name
		'name' => 'Requisiti Server',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Prima di procedere con un installazione completa, effettueremo alcuni test sulla configurazione del server per assicurarsi che siete in grado di installare ed eseguire il nostro software.
Vi invitiamo a leggere tra i risultati a fondo e non procedere fino a quando sono passati tutti i test richiesti.',
			),

			// Simple text
			array(
				'type' => 'info',
				'value' => '',
			),

			// Check PHP configuration
			array(
				'type' => 'php-config',
				'label' => 'Impostazioni PHP Richieste',
				'items' => array(
					'php_version' => array('>=4.0', 'Versione PHP'), // PHP version must be at least 4.0
					'short_open_tag' => null, // Display the value for "short_open_tag" setting
					'register_globals' => false, // "register_globals" must be disabled
					'safe_mode' => false, // "safe_mode" must be disabled
					'upload_max_filesize' => '>=2mb', // "upload_max_filesize" must be at least 2mb
				),
			),

			// Check loaded PHP modules
			array(
				'type' => 'php-modules',
				'label' => 'Moduli PHP Richiesti',
				'items' => array(
					'mysql' => array(true, 'MySQL'), // make sure "mysql" module is loaded
					//'ioncube' => array(true, 'IONCube'),
				),
			),

			// Verify folder/file permissions
			array(
				'type' => 'file-permissions',
				'label' => 'Cartelle e Files',
				'items' => array(
					'../cache/' => 'write', // make sure "cache" folder is writable
					'../config.php' => 'read', // make sure "config.php" file is writable
				),
			),
		),
	),

	// Step 4
	array(
		// Step name
		'name' => 'Percorsi Cartelle',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Abbiamo automaticamente impostato i percorsi predefiniti richiesti dal sistema. Si prega di assicurarsi che tutto sia corretto prima di continuare alla fase successiva. ',
			),
			array(
				'type' => 'info',
				'value' => 'Consigliamo di lasciare i campi predefiniti, altrimenti potrebbe fallire installazione',
			),

			// Text box
			array(
				'type' => 'text',
				'label' => 'URL Sito Web',
				'name' => 'virtual_path',
				'default' => rtrim(preg_replace('#/install/$#', '', VIRTUAL_PATH), '/').'/', // set default value
				'validate' => array(
					array('rule' => 'required'), // make it "required"
				),
			),

			// Text box
			array(
				'type' => 'text',
				'label' => 'Percorso Installazione',
				'name' => 'system_path',
				'default' => rtrim(preg_replace('#/install/$#', '', BASE_PATH), '/').'/',
				'validate' => array(
					array('rule' => 'required'), // make it required
					array('rule' => 'validate_system_path'), // run "validate_system_path" function the "includes/validation.php" file upon form submission
				),
			),
		),
	),

	// Step 5
	array(
		// Step name
		'name' => 'Impostazione Database',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Specificare le impostazioni del database qui. Si prega di notare che il database per il nostro software deve essere creato prima di questo passaggio. Se non hai ancora creato uno, farlo ora. ',
			),
			array(
				'type' => 'info',
				'value' => 'Se utilizzi il software in un gruppo di lavoro, assicurati di immettere i dati del server aziendale',
			),

			// Text box
			array(
				'label' => 'Nome Host Database',
				'name' => 'db_hostname',
				'type' => 'text',
				'default' => 'localhost',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
				),
			),

			// Text box
			array(
				'label' => 'Utente Database',
				'name' => 'db_username',
				'type' => 'text',
				'default' => 'root',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
				),
			),

			// Text box
			array(
				'label' => 'Password Database',
				'name' => 'db_password',
				'type' => 'text',
				'default' => '',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
				),
			),

			// Text box
			array(
				'label' => 'Nome Database',
				'name' => 'db_name',
				'type' => 'text',
				'default' => 'intse',
				'highlight_on_error' => false,
				'validate' => array(
					array('rule' => 'required'), // make it "required"
					array(
						'rule' => 'database', // system will automatically verify database connection details based on the provided values
						'params' => array(
							'db_host' => 'db_hostname',
							'db_user' => 'db_username',
							'db_pass' => 'db_password',
							'db_name' => 'db_name'
						)
					),
				),
			),
		),
	),

	// Step 6
	array(
		// Step name
		'name' => 'Pronto ad Installare',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Siamo ora pronti per procedere con l\'installazione. A questo punto cercheremo di creare tutte le tabelle necessarie e popolare con i dati. Se qualcosa dovesse andare storto, tornare alla fase delle impostazioni del database e assicurarsi che tutto sia corretto. ',
			),
		),

		// Callback functions that will be executed
		'callbacks' => array(
			array('name' => 'install'), // run "install" function the "includes/callbacks.php" file upon successful form submission
		),
	),

	// Step 7
	array(
		// Step name
		'name' => 'Account Amministratore',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'Le tabelle del database sono state create con successo e popolate con i dati!',
			),
			array(
				'type' => 'info',
				'value' => 'Ora si può impostare un account di amministratore per te. Questo vi permetterà di gestire il sito web attraverso il pannello di controllo. ',
			),

			// Text box
			array(
				'label' => 'Email',
				'name' => 'user_email',
				'type' => 'text',
				'default' => '',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
					array('rule' => 'valid_email'), // make sure email address is valid
				),
			),

			// Text box
			array(
				'label' => 'Password',
				'name' => 'user_password',
				'type' => 'text',
				'default' => '',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
					array('rule' => 'alpha_numeric'), // make sure only alpha-numeric characters are provided
					array('rule' => 'min_length', 'params' => 5), // make sure password does not contain less than 5 characters
					array('rule' => 'max_length', 'params' => 20), // make sure password does not contain more than 20 characters
				),
			),

			// Text box
			array(
				'label' => 'Password (conferma)',
				'name' => 'user_password2',
				'type' => 'text',
				'default' => '',
				'validate' => array(
					array('rule' => 'required'), // make it "required"
					array('rule' => 'matches', 'params' => 'user_password'), // make sure password text boxes match each other
				),
			),
		),

		// Callback functions that will be executed
		'callbacks' => array(
			array('name' => 'setup_admin'), // run "setup_admin" function the "includes/callbacks.php" file upon successful form submission
		),
	),

	// Step 8
	array(
		// Step name
		'name' => 'Completato',

		// Items we're going to display
		'fields' => array(

			// Simple text
			array(
				'type' => 'info',
				'value' => 'L\'account di amministratore è stato creato con successo.',
			),
			array(
				'type' => 'info',
				'value' => 'Il tuo CMS è disponibile all\'indirizzo <a href="'.rtrim(isset($_SESSION['params']['virtual_path']) ? $_SESSION['params']['virtual_path'] : '', '/').'" target="_blank">'.rtrim(isset($_SESSION['params']['virtual_path']) ? $_SESSION['params']['virtual_path'] : '', '/').'</a>'),
			array(
				'type' => 'info',
				'value' => 'Puoi effettuare il login al pannello amministratore usando i seguenti dati:',
			),
			array(
				'type' => 'info',
				'value' => 'Email: '.(isset($_SESSION['params']['user_email']) ? $_SESSION['params']['user_email'] : '').'<br/>
				Password: '.(isset($_SESSION['params']['user_password']) ? $_SESSION['params']['user_password'] : ''),
			),
		),
	),
);
