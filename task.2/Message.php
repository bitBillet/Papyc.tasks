<?php
    Class Message
    {
        private $messages = [];

        public function getMessage(array $validateResult): array
        {
            $this->getMailMessage($validateResult['email']);
            $this->getNameMessage($validateResult['name']);
            $this->getMobileMessage($validateResult['mobile']);

            return $this->messages;
        }

        private function getMailMessage(bool $mail)
        {
            if (false === $mail) {
                $this->messages[]= 'Регистрация пользователей с таким почтовым адресом невозможна';
            }
        }

        private function getNameMessage(bool $name)
        {
            if (false === $name) {
                $this->messages[]= 'Имя должно содержать три ключевых слова';
            }
        }

        private function getMobileMessage(bool $mobile)
        {
            if (false === $mobile) {
                $this->messages[]= 'Номер должен состоять из 11 цифр';
            }
        }
    }
?>