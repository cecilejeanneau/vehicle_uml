<?php

	/**
	 * Summary of Technician
	 */
	class Technician {
	/**
	 * Summary of name
	 * @var string
	 */
		private string $name;

		/**
		 * Summary of __construct
		 * @param mixed $name
		 */
		public function __construct(string $name) {
			$this->name = $name;
		}

		/**
		 * Summary of getName
		 * @return string
		 */
		public function getName(): string {
			return $this->name;
		}

		/**
		 * Summary of setName
		 * @param string $name
		 * @return mixed
		 */
		public function setName(string $name): Technician {
			$this->name = $name;
			return $this;
		}

	}
?>