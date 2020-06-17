<?php

namespace UTexasGenericJavascript;

use weitzman\DrupalTestTraits\ExistingSiteSelenium2DriverTestBase;

/**
 * Verifies existing site minimal configuration is set.
 *
 * @group utexas
 */
class MinimalConfigurationTest extends ExistingSiteSelenium2DriverTestBase {

  /**
   * An initial test that checks for basic site configuration.
   */
  public function testMinimalConfig() {
    $web_assert = $this->assertSession();
    // Create a user. Will be automatically cleaned up at the end of the test.
    $admin = $this->createUser([], NULL, TRUE);
    // Assert sitename is set to UTexas Core 3.
    $this->drupalLogin($admin);
    $this->drupalGet('/admin/config/system/site-information');
    $page = $this->getCurrentPage();
    $web_assert->fieldValueEquals('edit-site-name', 'UTexas Core 3');
  }

}
