<?php
/**
 *	GDELT ElasticSearch Injestion Script
 *	
 *	This script uses Google BigQuery to pull data from GDELT and ingest it into an instance of ElasticSearch.
 *
 *	@author		Véronique Bellamy
 *	@package	GDELT-PHP-ElasticSearch-Ingestion
 *	@version	0.1
 */

/**
 *	@param	$application_name	The application name for your application.
 */
$application_name = "GDELT-PHP-ElasticSearch-Ingestion";

/**
 *	@param $google_path	Path to the Google PHP library
 */
$google_path = "../google/src/Google/";

/**
 *	@param	$google_app_key	The application key to access Google BigQuery.
 */
$google_app_key = "";

/**
 *	@param	$elasticsearch The location of your elasticsearch installation.
 */
$elasticSearchPath = "http://127.0.0.1:9200";
?>