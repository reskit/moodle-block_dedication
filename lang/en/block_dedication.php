<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package block_dedication
 * @copyright 2022 University of Canterbury
 * @author Pramith Dayananda <pramithd@catalyst.net.nz>
 */

defined('MOODLE_INTERNAL') || die();


$string['admin_filter_courseid'] = 'Course Name';
$string['admin_filter_courseid_help'] = 'Filter the report by the course name';
$string['admin_filter_form'] = 'Course dedication configuration';
$string['admin_filter_form_help'] = 'Time is estimated based in the concepts of Session and Session duration applied to log entries.

<strong>Click:</strong> Every time that a user access to a page in Moodle a log entry is stored.

<strong>Session:</strong> set of two or more consecutive clicks in which the elapsed time
between every pair of consecutive clicks does not overcome an established maximum time.

<strong>Session duration:</strong> elapsed time between the first and the last click of the session.

<strong>Dedication time:</strong> the sum of all session duration for a user.';

$string['admin_filter_form_text'] = 'Select the range of dates and the maximum time between clicks of the same session.';
$string['admin_filter_mintime'] = 'Start of the period';
$string['admin_filter_mintime_help'] = 'Consider only log entries after this date';
$string['admin_filter_maxtime'] = 'End of the period';
$string['admin_filter_maxtime_help'] = 'Consider only log entries ending before this date';
$string['admin_filter_limit'] = 'Limit between clicks (in minutes)';
$string['admin_filter_limit_help'] = 'The limit between clicks defines if two clicks are part of the same session or not';
$string['admin_filter_submit'] = 'Calculate';
$string['collect_dedication'] = 'Collect data for block dedication';
$string['column_dedicatoin'] = 'Column Dedication';
$string['default_session_limit'] = 'Default session limit';
$string['default_session_limit_desc'] = 'Session limit default for the report page filters';
$string['entitiy_dedication'] = 'Entitiy Dedication';
$string['ignore_sessions_limit'] = 'Ignore session limit';
$string['ignore_sessions_limit_desc'] = 'Removes shorter sessions, anything less than this value (in mins) will be ignored in the dedication report';
$string['pluginname'] = 'Dedication';
$string['privacy:metadata'] = 'The block_dedication plugin does not store any personal data.';
$string['report_dedication'] = 'Tool Dedication Report';
$string['report_timespent'] = 'Report Timespent';
$string['reporttitle'] = 'Dedication Report';
$string['user_dedication_datasource'] = 'Users Dedication';
$string['dedication:addinstance'] = 'Allow to add Course dedication block';
$string['dedication:use'] = 'Allow to use Course dedication';
$string['dedication_estimation'] = 'Your estimated dedication time is';
$string['access_button'] = 'Dedication tool';
$string['access_info'] = 'Only for teachers:';
$string['period'] = 'Period since <em>{$a->mintime}</em> to <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Elapsed time:</strong>  {$a}';
$string['totaldedication'] = '<strong>Total dedication:</strong> {$a}';
$string['meandedication'] = '<strong>Mean dedication:</strong> {$a}';

$string['dedicationrow'] = 'Course dedication';
$string['connectionratiorow'] = 'Connections per day';
$string['dedicationall'] = 'All course members dedication. Click on any name to see a detailed course dedication for it.';
$string['period'] = 'Period since <em>{$a->mintime}</em> to <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Elapsed time:</strong>  {$a}';
$string['totaldedication'] = '<strong>Total dedication:</strong> {$a}';
$string['meandedication'] = '<strong>Mean dedication:</strong> {$a}';
