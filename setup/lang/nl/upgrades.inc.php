<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'Het veld class_key toegevoegd om modUser derivaten te ondersteunen.';
$_lang['added_cachepwd'] = 'Het veld cachepwd toegevoegd welke miste in oudere Revolution releases.';
$_lang['added_content_ft_idx'] = 'Nieuwe full-text index `content_ft_idx` op de volgende velden toegevoegd `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Toestaan NULL opgelost in `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Het veld `action` voor modActiveUser aangepast om lange actie labels toe te staan.';
$_lang['alter_usermessage_messageread'] = 'Het veld van modUserMessage `messageread` veranderd in `read`.';
$_lang['alter_usermessage_postdate'] = 'Het veld van modUserMessage `postdate` veranderd van INT naar DATETIME en hernoemd naar `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Het veld van modUserMessage `subject` veranderd van VARCHAR(60) naar VARCHAR(255).';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Connector context ACLs verwijderd.';
$_lang['connector_acls_not_removed'] = 'Kan de connector context ACLs niet verwijderen.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Kan de connector context niet verwijderen.';
$_lang['data_remove_error'] = 'Fout bij verwijderen van de data voor class `[[+class]]`.';
$_lang['data_remove_success'] = 'Met succes de data van tabel `[[+class]]` verwijderd.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'De modLexiconEntry `createdon` veranderd naar toestaan NULL.';
$_lang['lexiconentry_focus_alter'] = 'De modLexiconEntry `focus` van VARCHAR(100) naar INT(10) aangepast.';
$_lang['lexiconentry_focus_alter_int'] = 'De modLexiconEntry `focus` kolom data van string naar een nieuw int relatie met modLexiconTopic aangepast.';
$_lang['lexiconfocus_add_id'] = 'Kolom modLexiconFocus `id` toegevoegd.';
$_lang['lexiconfocus_add_pk'] = 'Primaire sleutel op modLexiconFocus `id` kolom toegevoegd.';
$_lang['lexiconfocus_alter_pk'] = 'Het veld modLexiconFocus `name` van primaire sleutel naar unieke waarde aangepast';
$_lang['lexiconfocus_drop_pk'] = 'De modLexiconFocus primaire sleutel verwijderd.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Tabel `[[+old]]` hernoemd naar `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Volledige-tekst index `[[+index]]` verwijderd.';
$_lang['systemsetting_xtype_fix'] = 'Succesvol de xtypes voor modSystemSettings opgelost.';
$_lang['transportpackage_manifest_text'] = 'Kolom `manifest` naar TEXT van MEDIUMTEXT veranderd in `[[+class]]`.';
$_lang['update_closure_table'] = 'Update afsluiting tabel data voor class `[[+class]]`.';
$_lang['update_table_column_data'] = 'Data in kolom [[+column]] van tabel [[+table]] ( [[+class]] ) aangepast.';
$_lang['iso_country_code_converted'] = 'Land namen van gebruikersprofiel zijn succesvol omgezet naar ISO codes.';
$_lang['legacy_cleanup_complete'] = 'Oude bestanden zijn opgeschoond.';
$_lang['legacy_cleanup_count'] = '[[+files]] bestand(en) en [[+folders]] map(pen) zijn verwijderd.';
