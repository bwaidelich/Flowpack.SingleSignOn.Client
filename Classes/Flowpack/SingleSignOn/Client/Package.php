<?php
namespace Flowpack\SingleSignOn\Client;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flowpack.SingleSignOn.Client".*
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * Connect SSO specific signals
 */
class Package extends \TYPO3\Flow\Package\Package {

	/**
	 * @param \TYPO3\Flow\Core\Bootstrap $bootstrap
	 * @return void
	 */
	public function boot(\TYPO3\Flow\Core\Bootstrap $bootstrap) {
		$bootstrap->getSignalSlotDispatcher()->connect(
			'TYPO3\Flow\Security\Authentication\AuthenticationProviderManager',
			'loggedOut',
			'Flowpack\SingleSignOn\Client\Service\SingleSignOnManager',
			'logout'
		);
	}
}

?>