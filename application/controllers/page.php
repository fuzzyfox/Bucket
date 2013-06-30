<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * SandCastle
	 *
	 * An opensource set of tools for making a basic community site.
	 *
	 * @package 	SandCastle
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 * @filesource
	 */

	// -------------------------------------------------------------------------

	/**
	 * Page Controller
	 *
	 * Provides the needed functions to make running a basic community portal a
	 * piece of cake. This controller acts as an example of one way the Planet
	 * Library and Planet Model can be used together to produce a functioning
	 * planet, as well as an events listing.
	 *
	 * @package 	SandCastle
	 * @subpackage 	Controllers
	 * @category 	Portal
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 *
	 * @todo Portal Features
	 * * write views for all pages
	 * * setup some uri routing within the config files
	 */
	class Page extends CI_Controller
	{
		/**
		 * Constructor
		 *
		 * constructs the controller and ensures that the parent is linked to
		 * correctly when we load libraries, models, and helpers
		 */
		public function __construct()
		{
			parent::__construct();

			$this->load->library('sandcastle/planet');
			$this->load->model(array('sandcastle/planet_model',
			                         'sandcastle/event_model',
			                         'sandcastle/setting_model'));
			$this->load->helper(array('url', 'text'));
			$this->load->library('jinja-inheritance/JI_Loader', NULL, 'ji_load');
		}

		/**
		 * Portal homepage
		 *
		 * Shows the needed lines of code to create a portal homepage with some
		 * news items and events on it. No content will actually be outputed into
		 * a template right now but this is to come.
		 */
		public function index()
		{
			// load form helper
			$this->load->helper('form');

			// get all the feeds from the db to populate the news sidebar
			$data['feeds'] = (array)$this->get_all_feeds();
			// get all the events in the coming month
			$data['events'] = $this->event_model->get_events_between();

			// get the firefox version from the db for the download box
			$data['LATEST_FIREFOX_VERSION'] = $this->setting_model->get('LATEST_FIREFOX_VERSION');

			// load index view
			$this->ji_load->view('page/index', $data);
		}

		/**
		 * Get all planet feeds
		 *
		 * Gets all the planet feeds, updates the cache if needed (by virtue of
		 * how the planet lib works) and acts as a cron task if the paramater is
		 * FALSE
		 *
		 * @param	boolean	$rtn	TRUE by default, FALSE to act as cron task
		 * @return	mixed	feed object sorted by time or FALSE on total failure
		 */
		public function get_all_feeds($rtn = TRUE)
		{
			// detect if call is from a browser and redirect to index if so
			if(!$rtn && ENVIRONMENT !== 'development' && !$this->input->is_cli_request())
			{
				redirect('planet');
			}

			// add all feeds into the array using the model to get the feeds
			// from the database
			$dbfeeds = $this->planet_model->get_feeds();
			if($dbfeeds)
			{
				// something to store the list of feeds from the database in.
				$feeds = array();

				foreach($dbfeeds as $feed)
				{
					array_push($feeds, $feed->feed_url);
				}

				// use the planet library to get the actual feeds and cache them
				// if needed
				$feeds = $this->planet->get_feed($feeds);
				if(ENVIRONMENT !== 'production' && $rtn === FALSE)
				{
					echo '<pre>';
					print_r($feeds);
					echo '</pre>';
				}
				elseif($rtn === TRUE)
				{
					return $feeds;
				}
			}

			return FALSE;
		}


		/**
		 * Displays a planet page
		 */
		public function planet()
		{
			$data['articles'] = $this->get_all_feeds();
			$data['feeds'] = $this->planet_model->get_feeds();
			$this->ji_load->view('page/planet', $data);
		}

		/**
		 * Displays the events page
		 */
		public function events()
		{
			$data['events'] = $this->event_model->get_event();
			$this->ji_load->view('page/events', $data);
		}

		/**
		 * Display about page
		 *
		 * Currently set to redirect to mozilla mission temporarily
		 */
		public function about()
		{
			redirect('https://www.mozilla.org/mission', 'location', 307);
			$this->load->view('page/about', NULL);
		}
	}

/* End of file page.php */
/* Location: application/controllers/page.php */
