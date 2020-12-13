<?php


namespace App\models;


class ExelModel
{
	/** @var null
	 *this will be what will be returned
	 */
	private $result;


	/**
	 * @var boolean
	 * this is for to get all file data or just the title
	 */
	private $full_file;

	private $filename;



	private $filedata;


	/**
	 * ExelObject constructor.
	 * @param null $result
	 * @param string $Filetype
	 * @param bool $full_file
	 * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function __construct(string $FileName, bool $full_file)
	{
		$this->full_file = $full_file;
		$this->filename = $FileName;
		$this->filedata = $this->getallfiledata($this->filename);


	}

	/**
	 * @return bool
	 */
	public function isFullFile(): bool
	{
		return $this->full_file;
	}

	/**
	 * @return string
	 */
	public function getfilenames(): string
	{
		return $this->filename;
	}

	/**
	 * @return array|string
	 */
	public function getFiledata()
	{
		return $this->filedata;
	}



	 function getallfiledata($fileName)
	{
		$csv_data = array();
		$i = 0;
		if (file_exists($fileName)) {
			if (($h = fopen("$fileName", "r")) !== FALSE) {
				// Each line in the file is converted into an individual array that we call $data
				// The items of the array are comma separated
				$i = 0;
				while (($data = fgetcsv($h, 1000, ";")) !== FALSE) {
					// Each individual array is being pushed into the nested array

					$csv_data[$i] = $data[0];
					$i++;

				}
				// Close the file
				fclose($h);
			};
			return $csv_data;
		}
		return null;

	}


}
