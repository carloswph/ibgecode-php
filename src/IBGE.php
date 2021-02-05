<?php

namespace WPH\IBGE;

class IBGE {

	use Codes;

	protected $codes;

	protected $result;

	public function __construct(array $codes) {

		$this->codes = $codes;
	}

	public function getCity() {

		$this->result = array();

		foreach ($this->codes as $code) {
			if(!is_null($this->cities[$code])) {
				$this->result[] = $this->cities[$code]['cidade'];
			} else {
				$this->result[] = 'Código Inexistente.';
			}
		}

		return $this->result;
	}

	public function getState() {

		$this->result = array();

		foreach ($this->codes as $code) {
			if(!is_null($this->cities[$code])) {
				$this->result[] = $this->cities[$code]['estado'];
			} else {
				$this->result[] = 'Código Inexistente.';
			}
		}

		return $this->result;
	}

	public function getBoth() {

		$this->result = array();

		foreach ($this->codes as $code) {
			if(!is_null($this->cities[$code])) {
				$this->result[] = array(
					'cidade' => $this->cities[$code]['cidade'],
					'estado' => $this->cities[$code]['estado']
				);
			} else {
				$this->result[] = array('Código Inexistente.');
			}
		}

		return $this->result;
	}

	public function toJson(bool $pretty = false) {

		if($pretty === false) {
			return json_encode($this->result);
		} else {
			return '<pre>' . json_encode($this->result, JSON_PRETTY_PRINT) . '</pre>';
		}

	}

}