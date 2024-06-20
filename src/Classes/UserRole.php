<?php

namespace App\Classes;

enum UserRole: string {
    case STUDENT = 'student' ;
    case SECRETARY = 'secretary' ;
    case TEACHER = 'teacher' ;
    case DIRECTOR = 'director' ;
}