<?php
/**
 * Plugin Name: Social Media Links
 * Description: A plugin that adds social media icons to your website
 * Version: 0.1
 * Author: Stacy Moorhead
 * License: GPL2
 */
 
 /* Copyright 2018 Stacy Moorhead
Social Media Links is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Social Media Links is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program. If not, write to the Free Software Foundation, Inc.,
51 Franklin St., Fifth Floor, Boston, MA 02110-1301 USA
*/

function __construct() {
    parent::__construct(
            'Social_Media',
            __('Social Media Profiles', 'translation_domain'), // Name
            array('description' =&gt; __('Links to Author social media profiles', 'translation_domain'),)
    );
}

public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'My Social Profile' : null;
 
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        ?&gt;
        &lt;p&gt;
            &lt;label for=&quot;&lt;?php echo $this-&gt;get_field_id('title'); ?&gt;&quot;&gt;&lt;?php _e('Title:'); ?&gt;&lt;/label&gt;
            &lt;input class=&quot;widefat&quot; id=&quot;&lt;?php echo $this-&gt;get_field_id('title'); ?&gt;&quot; name=&quot;&lt;?php echo $this-&gt;get_field_name('title'); ?&gt;&quot; type=&quot;text&quot; value=&quot;&lt;?php echo esc_attr($title); ?&gt;&quot;&gt;
        &lt;/p&gt;
 
        &lt;p&gt;
            &lt;label for=&quot;&lt;?php echo $this-&gt;get_field_id('facebook'); ?&gt;&quot;&gt;&lt;?php _e('Facebook:'); ?&gt;&lt;/label&gt;
            &lt;input class=&quot;widefat&quot; id=&quot;&lt;?php echo $this-&gt;get_field_id('facebook'); ?&gt;&quot; name=&quot;&lt;?php echo $this-&gt;get_field_name('facebook'); ?&gt;&quot; type=&quot;text&quot; value=&quot;&lt;?php echo esc_attr($facebook); ?&gt;&quot;&gt;
        &lt;/p&gt;
 
        &lt;p&gt;
            &lt;label for=&quot;&lt;?php echo $this-&gt;get_field_id('twitter'); ?&gt;&quot;&gt;&lt;?php _e('Twitter:'); ?&gt;&lt;/label&gt;
            &lt;input class=&quot;widefat&quot; id=&quot;&lt;?php echo $this-&gt;get_field_id('twitter'); ?&gt;&quot; name=&quot;&lt;?php echo $this-&gt;get_field_name('twitter'); ?&gt;&quot; type=&quot;text&quot; value=&quot;&lt;?php echo esc_attr($twitter); ?&gt;&quot;&gt;
        &lt;/p&gt;
 
        &lt;p&gt;
            &lt;label for=&quot;&lt;?php echo $this-&gt;get_field_id('google'); ?&gt;&quot;&gt;&lt;?php _e('Google+:'); ?&gt;&lt;/label&gt;
            &lt;input class=&quot;widefat&quot; id=&quot;&lt;?php echo $this-&gt;get_field_id('google'); ?&gt;&quot; name=&quot;&lt;?php echo $this-&gt;get_field_name('google'); ?&gt;&quot; type=&quot;text&quot; value=&quot;&lt;?php echo esc_attr($google); ?&gt;&quot;&gt;
        &lt;/p&gt;
 
        &lt;p&gt;
            &lt;label for=&quot;&lt;?php echo $this-&gt;get_field_id('linkedin'); ?&gt;&quot;&gt;&lt;?php _e('Linkedin:'); ?&gt;&lt;/label&gt;
            &lt;input class=&quot;widefat&quot; id=&quot;&lt;?php echo $this-&gt;get_field_id('linkedin'); ?&gt;&quot; name=&quot;&lt;?php echo $this-&gt;get_field_name('linkedin'); ?&gt;&quot; type=&quot;text&quot; value=&quot;&lt;?php echo esc_attr($linkedin); ?&gt;&quot;&gt;
        &lt;/p&gt;
 
        &lt;?php
    }
    
 public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
 
        return $instance;
    }
    
 public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];
 
// social profile link
        $facebook_profile = '&lt;a class=&quot;facebook&quot; href=&quot;' . $facebook . '&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;';
        $twitter_profile = '&lt;a class=&quot;twitter&quot; href=&quot;' . $twitter . '&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;';
        $google_profile = '&lt;a class=&quot;google&quot; href=&quot;' . $google . '&quot;&gt;&lt;i class=&quot;fa fa-google-plus&quot;&gt;&lt;/i&gt;&lt;/a&gt;';
        $linkedin_profile = '&lt;a class=&quot;linkedin&quot; href=&quot;' . $linkedin . '&quot;&gt;&lt;i class=&quot;fa fa-linkedin&quot;&gt;&lt;/i&gt;&lt;/a&gt;';
 
echo $args['before_widget'];
if (!empty($title)) {
echo $args['before_title'] . $title . $args['after_title'];
}
 
        echo '&lt;div class=&quot;social-icons&quot;&gt;';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo '&lt;/div&gt;';
        echo $args['after_widget'];
}   

