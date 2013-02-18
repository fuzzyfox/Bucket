<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

  /**
   * SandCastle
   *
   * An opensource set of tools for making a basic community site.
   *
   * @package   SandCastle
   * @author    William Duyck <wduyck@gmail.com>
   * @copyright   Copyleft 2012, William Duyck
   * @license   https://www.mozilla.org/MPL/2.0/ MPL v2.0
   * @link    http://www.wduyck.com/ wduyck.com
   * @filesource
   */

  // -------------------------------------------------------------------------

  /**
   * Mozilla Product Version Library
   *
   * Provides the needed functions to make fetching the latest version of
   * various Mozilla products a piece of cake.
   *
   * @package   SandCastle
   * @subpackage  Libraries
   * @category  Mozilla Product Version
   * @author    Leo McArdle <leomcardle@gmail.com>
   * @copyright   CC BY Leo McArdle
   * @license   https://www.mozilla.org/MPL/2.0/ MPL v2.0
   * @link    http://leomca.github.com/ leomca.github.com
   */
  class Mozversion
  {

    /**
     * Gets the latest Firefox version
     *
     * Gets the latest version of Firefox from a specific channel
     *
     * Usage:
     *    $version = $this->mozversion->get_firefox('LATEST_FIREFOX_VERSION');
     *
     * @param string $channel the Firefox channel to get the version of
     * @return string the Firefox version requested
     */
    public function get_firefox($channel)
    {

      // create curl resource
      $ch = curl_init();

      // set url
      curl_setopt($ch, CURLOPT_URL, 'https://www.mozilla.org/includes/product-details/json/firefox_versions.json');

      //return the transfer as a string
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      // $output contains the output string
      $json = curl_exec($ch);

      // close curl resource to free up system resources
      curl_close($ch);

      $firefox_versions = json_decode($json, true);
      return $firefox_versions[$channel];

    }
  }

/* End of file mozproductversion.php */
/* Location: application/libraries/sandcastle/mozproductversion.php */
