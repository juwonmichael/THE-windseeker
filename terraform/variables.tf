variable "aws_region" {
  description = "AWS region to deploy resources"
  type        = string
  default     = "eu-west-2" 
}

variable "environment" {
  description = "Environment name"
  type        = string
  default     = "production"
}

variable "project_name" {
  description = "Project name"
  type        = string
  default     = "the-windseeker"
} 