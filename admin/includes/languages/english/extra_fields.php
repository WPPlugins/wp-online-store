<?php
/*
  $Id: extra_fields.php version 2.3 2010-11-19 $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2008 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', "Extra Product Fields");
define('TABLE_HEADING_ID', "ID #");
define('TABLE_HEADING_LABEL', 'Language/Label');
define('TABLE_HEADING_ORDER', 'Sort Order');
define('TABLE_HEADING_STATUS', 'Catalog Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_YES', 'Yes');
define('TEXT_NO', 'No');
define('BUTTON_NEW', "Create New Extra Field");
define('BUTTON_EDIT_VALUES', 'Edit Value List');
define('ENTRY_LABEL', 'Label: ');
define('ENTRY_ACTIVE', 'Field Is Active For This Language: ');
define('ENTRY_ALL_CATEGORIES', 'This field applies to all categories (if no, select from categories listed below): ');
define('ENTRY_CHECK_CATEGORIES', 'Check the boxes for the categories to which this fields applies below. These will be ignored if Applies To All Categories is set to YES. If a category is checked all subcategories underneath it are also automatically included as using this field. If Applies To All Categories is set to NO and no categories are checked when the field is saved then the Applies To All Categories setting will be changed to YES. Note: Selecting the Top category is the same as selecting all categories since all other categories are subcategories of the Top category.');
define('ENTRY_ACTIVATE_NOW', 'Field Is Visable In Catalog: ');
define('ENTRY_SHOW_ADMIN', 'Show Field In Admin Side Even If Disabled For Catalog: ');
define('ENTRY_ORDER', 'Sort Order: ');
define('ENTRY_VALUE_LIST', 'Uses A List Of Values: ');
define('ENTRY_SEARCH', 'Enable Advanced Search On This Field: ');
define('ENTRY_TEXT_ENTRY', 'Enter text using: ');
define('TEXT_SINGLE_LINE', 'single line');
define('TEXT_MULTILINE', 'text area');
define('TEXT_LIST_IGNORES', ' (ignored if field uses value list)');
define('TEXT_TEXTAREA_NOTE', 'NOTE: Textarea fields may not be displayed in the product listing.');
define('ENTRY_LISTING', 'Show Field In Product Listings: ');
define('ENTRY_SIZE', 'Maximum Number Of Characters Allowed In Field (ignored if field uses value list or textarea): ');
define('ENTRY_META', 'Use Value Of Field As A META Keyword For Search Engines: ');
define('ENTRY_LIST_TYPE', 'From list of values user may select: ');
define('TEXT_SINGLE_VALUE', 'single value');
define('TEXT_MULTIPLE_VALUE', 'multiple values');
define('ENTRY_CHAIN', 'Show Chain Of Parent Values For Field (requires single value list): ');
define('ENTRY_RESTRICT', 'Allow Field To Be Used To Restrict Product Listings (requires single value list): ');
define('ENTRY_SEARCH_BOX', 'Use Field In Advanced Quick Search Box (requires single value list and advanced search): ');
define('ENTRY_CHECKBOX', 'Values Are Selected Using: ');
define('TEXT_DROPDOWN', 'Pull Down Menu');
define('TEXT_CHECKBOX', 'Check Boxes');
define('TEXT_RADIO', 'Radio Buttons');
define('TEXT_MS_CHECKBOX_NOTE', 'NOTE: This entry only applies to Single Value Select Lists which use the selected entry type except in the Advanced Quick Search box where a drop down menu is always used. Multiple Value Select Lists always use checkboxes for data entry.');
define('ENTRY_COLUMNS', 'Number of columns of values to use for checkbox/radio entry: ');
define('ENTRY_DISPLAY_TYPE', 'Display List Field Values As: ');
define('TEXT_TEXT', 'Text Only');
define('TEXT_IMAGE', 'Image Only (with alt text)');
define('TEXT_IMAGE_TEXT', 'Image & Text');
define('TEXT_SAMPLE', 'Example Display');
define('ERROR_COLS_OUTOFRANGE', 'Number Of Columns must be a number between 1 and 255!');
define('ERROR_OUTOFRANGE', 'Maximum size must be a number between 1 and 255!');
define('ERROR_ENTRY_REQUIRED', 'Entry is missing! ');
define('ERROR_INCOMPATIBLE_MS_SC', 'ERROR! Fields using a multiple-select value list cannot show a chain of parent values!');
define('ERROR_INCOMPATIBLE_TA_PL', 'ERROR! Fields entering using a textarea field cannot be shown in the product listing!');
define('ERROR_INCOMPATIBLE_MS_RPL', 'ERROR! Fields using a multiple-select value list cannot restrict product listings!');
define('ERROR_INCOMPATIBLE_MS_QS', 'ERROR! Fields using a multiple-select value list cannot be used in the Advanced Quick Search box!');
define('ERROR_AS_REQUIRED', 'ERROR! This field will not display in the Advanced Quick Search box unless you enable Advanced Search for this field.');
define('TEXT_APPLIES_LIST_ONLY', 'The following entries apply only if Uses List Of Values is set to Yes. You may ignore them for text type fields.');
define('TEXT_ENABLED', 'Enabled');
define('TEXT_DISABLED', 'Disabled');
define('TEXT_SIZE', 'Maximum Size: ');
define('TEXT_SEARCHABLE', 'Directly Searchable: ');
define('TEXT_META', 'META Keyword: ');
define('TEXT_USER_SELECTS', 'User May Select: ');
define('TEXT_SELECTED_BY', 'Selected Using: ');
define('TEXT_RESTRICTS', 'Restricts Product Listings: ');
define('TEXT_SHOW_PARENTS', 'Show Parent Values: ');
define('TEXT_SEARCH_BOX', 'Quick Search Box: ');
define('TEXT_COLUMNS', 'Number Of Check/Radio Columns: ');
define('TEXT_DISPLAY_TYPE', 'Display Values As: ');
define('TEXT_LINKED_TO', 'Linked To Field #');
define('HEADING_NEW', 'Creating New Field');
define('HEADING_EDIT', 'Editing Existing Field #');
define('ERROR_ACTIVE', 'Field must be active for at least one language!');
define('ERROR_LABEL', 'Field label for active language %s must not be blank!');
define('WARNING_TRUNCATE', 'WARNING: Data will be lost if you reduce the field length to this size! Currently %d product descriptions contain values that are longer than this size! To avoid data loss this field would need to be at least %d characters long. If you really want to reduce the size of this field and cause data to be truncated then click the Save button to confirm the change.');
define('WARNING_LANGUAGE_IN_USE', 'WARNING: This field currently has %d products with values set for the language %s! If you really want to deactivate the field for this language then click on the Save button to confirm the change. The currently entered information will not be deleted but it will also not be viewable or changeable.');
define('HEADING_DELETE', 'Delete Extra Product Field #');
define('TEXT_FIELD_DATA', '<b>Language:</b> %s <b>Label:</b> %s <b>Used By:</b> %d products');
define('TEXT_ARE_SURE', 'Are you sure you want to delete this field?');
define('TEXT_VALUES_GONE', ' All values stored in the value lists for this field will also be deleted!');
define('TEXT_LINKS_DESTROYED', ' This field is linked to another field and all value links between this field and the other will be destroyed if you delete this field!');
define('TEXT_CONFIRM_DELETE', 'Are you really sure you want to delete this field? All data stored for this field will be lost!');
define('BUTTON_UNLINK', 'Unlink Field');
define('BUTTON_LINK', 'Link This Field To Another');
define('BUTTON_CREATE_LINK', 'Create Link To Selected Field');
define('HEADING_UNLINK', 'Unlink Field %d From Field %d');
define('TEXT_NUM_LINKED', 'Currently %d values from this field are linked to the other field.');
define('TEXT_SURE_UNLINK', 'Are you sure you want to unlink these two fields?');
define('TEXT_LINKS_GONE', ' All value links between this field and the other will be destroyed if you continue!');
define('TEXT_CONFIRM_UNLINK', 'Are you really sure you want to unlink these fields? All value links between this field and the other will be destroyed if you continue!');
define('ERROR_NO_FIELD', 'Error! Field to link not found!');
define('TABLE_HEADING_SELECT', 'Select');
define('TEXT_SELECT_LINK', ' Select a field from the list below to link to this field. Languages in the list marked with a * may have values linked to this field.');
define('TEXT_NOT_LINKABLE', 'This field does not have any active languages that match the field to be linked and therefore may not be linked to that field.');
define('ERROR_NONE_LINKABLE', 'No fields were found that could be linked to this field!');
define('ERROR_WRONG_TYPE', 'Error! Fields to link must both use value lists!');
define('ERROR_SAME_TYPE', 'Error! One field to link must use a single select value list while the other must use a multiple select value list!');
define('ERROR_ALREADY_LINKED', 'Error! Field %d is already linked to another field!');
define('TEXT_LINK_SUCCESS', 'Field %d has been successfully linked to field %d.');
define('ERROR_NOT_LINKED', 'This field is not linked to another field!');
define('TEXT_ADMIN_AVAILABLE', 'Available In Admin: ');
?>
