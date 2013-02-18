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
   * Setting Model
   *
   * Provides the needed functions to make settings management a piece of
   * cake. More specifically it deals with the database side of things.
   *
   * When talking about the "database result object" this refers to the
   * CodeIgniter database result object, i.e. `$query->result();`
   *
   * @package   SandCastle
   * @subpackage  Models
   * @category  Setting
   * @author    Leo McArdle <leomcardle@gmail.com>
   * @copyright   CC BY Leo McArdle
   * @license   https://www.mozilla.org/MPL/2.0/ MPL v2.0
   * @link    http://leomca.github.com/ leomca.github.com
   */
  class Setting_model extends CI_Model
  {
    /**
     * Constructor
     *
     * Initialises the model and laods the database connection.
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    /**
     * Add setting
     *
     * Adds a setting to the database
     *
     * @param string  $id the setting id
     * @param string  $val the value of the setting
     * @return  boolean TRUE on succes
     */
    public function add($id, $val)
    {
      return ($this->db->insert('setting', array(
        'id'   => $id,
        'val'  => $val
      ))) ? TRUE : FALSE;
    }

    /**
     * Delete setting
     *
     * Removes a setting from the database
     *
     * @param string  $id the id of the setting to delete
     * @return  boolean TRUE on success
     */
    public function delete($id)
    {
      return ($this->db->delete('setting', array(
        'id' => $id
      ))) ? TRUE : FALSE;
    }

    /**
     * Get settings
     *
     * Returns one or all settings in the database
     *
     * @param string  $id  the id of the setting to get [optional]
     * @return  mixed database result object on success, FALSE on fail
     */
    public function get($id = null)
    {
      // specific setting requested
      if(is_string($id))
      {
        $setting = $this->db->get_where('setting', array(
          'id' => $id
        ));

        return ($setting->num_rows() === 1) ? $setting->result() : FALSE;
      }

      // all settings
      $settings = $this->db->get('setting');
      return ($settings->num_rows() > 0) ? $settings->result() : FALSE;
    }
  }

/* End of file setting_model.php */
/* Location: application/models/sandcastle/setting_model.php */
