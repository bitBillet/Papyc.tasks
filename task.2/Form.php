<?php
    Class Form
    {
        public function validate(array $data): array
        {
            $result = [
                'name'   => $this->checkName($data['name']),
                'mobile' => $this->checkMobile($data['mobile']),
                'email'  => $this->checkEmail($data['email']),
            ];
            return $result;
        }

        private function checkName(string $name): bool
        {
            $nameArr = explode(' ', $name);
            return count($nameArr) === 3;
        }

        private function checkMobile(string $mobile): bool
        {
            return mb_strlen($mobile) === 11;
        }

        private function checkEmail(string $email): bool
        {
            $isGmail = strpos($email, '@gmail');
            return !$isGmail;
        }
    }
?>