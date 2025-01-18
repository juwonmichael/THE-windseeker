output "ecr_repository_url" {
  value = aws_ecr_repository.app.repository_url
}

output "ci_user_access_key" {
  value     = aws_iam_access_key.ci_user_key.id
  sensitive = true
}

output "ci_user_secret_key" {
  value     = aws_iam_access_key.ci_user_key.secret
  sensitive = true
} 