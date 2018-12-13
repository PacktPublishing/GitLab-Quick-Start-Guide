# GitLab Quick Start Guide

<a href="https://www.packtpub.com/virtualization-and-cloud/gitlab-quick-start-guide?utm_source=github&utm_medium=repository&utm_campaign=9781789534344 "><img src="https://d255esdrn735hr.cloudfront.net/sites/default/files/imagecache/ppv4_main_book_cover/9781789534344_cover.png" alt="GitLab Quick Start Guide" height="256px" align="right"></a>

This is the code repository for [GitLab Quick Start Guide](https://www.packtpub.com/virtualization-and-cloud/gitlab-quick-start-guide?utm_source=github&utm_medium=repository&utm_campaign=B07L3Q35JZ ), published by Packt.

**Migrate to GitLab for all your repository management solutions**

## What is this book about?
Gitlab is an open source repository management and version control toolkit with an enterprise offering. This book is the ideal guide to GitLab as a version control system (VCS), issue management tool, and a continuous integration platform.

This book covers the following exciting features:
* Set up CI and test builds for your projects 
* Understand the benefits and limitations of GitLab work?ow 
* Migrate from other common VCS platforms to Gitlab 
* Create, review, and merge code changes 
* Learn to branch local code and create a new branch in GitLab 
* Configure sequential stages and simultaneous stages for CI/CD 
* Access Mattermost for on-premise GitLab 
* Discover the issue tracking features of GitLab 

If you feel this book is for you, get your [copy](https://www.amazon.com/dp/9781789534344) today!

<a href="https://www.packtpub.com/?utm_source=github&utm_medium=banner&utm_campaign=GitHubBanner"><img src="https://raw.githubusercontent.com/PacktPublishing/GitHub/master/GitHub.png" 
alt="https://www.packtpub.com/" border="5" /></a>

## Instructions and Navigations
All of the code is organized into folders. For example, Chapter02.

The code will look like the following:
```
 <?php
namespace Judges119\Monolog\Formatter;
use Monolog\Formatter\FormatterInterface;
class ROT13Formatter implements FormatterInterface
{
public function format(array $record)
{
return str_rot13($record['message']);
}
public function formatBatch(array $records)
{
foreach ($records as $key => $record) {
$records[$key] = $this->format($record);
}
return $records;
}
}
```

**Following is what you need for this book:**
The book is intended for the developers, SREs, and DevOps professionals who are looking for techniques to port their codebase to GitLab from GitHub or are looking to work with GitLab as their version control system of choice. If you've used other VCSs before, that will help with this book.	

With the following software and hardware list you can run all code files present in the book (Chapter 1-7).
### Software and Hardware List
| Chapter | Software required | OS required |
| -------- | ------------------------------------ | ----------------------------------- |
| 2 (optional) | GitLab 11.x (and newer) | Ubuntu, Debian, CentOS |
| 3,4,5,6 | Git 2.x.x | Windows, Mac OS X, and Linux (Any) |
| 4, 5 (optional) | PHP 5.6 (and newer) | Windows, Mac OS X, and Linux (Any) |
| 5 (optional) | Composer 1.7.x | Windows, Mac OS X, and Linux (Any) |


We also provide a PDF file that has color images of the screenshots/diagrams used in this book. [Click here to download it](https://www.packtpub.com/sites/default/files/downloads/9781789534344_ColorImages.pdf).

### Related products
* Git Version Control Cookbook - Second Edition  [[Packt]](https://india.packtpub.com/in/application-development/git-version-control-cookbook-second-edition?utm_source=github&utm_medium=repository&utm_campaign=) [[Amazon]](https://www.amazon.com/dp/9781789137545)

* Hands-On DevOps with Vagrant  [[Packt]](https://india.packtpub.com/in/virtualization-and-cloud/hands-devops-vagrant?utm_source=github&utm_medium=repository&utm_campaign=) [[Amazon]](https://www.amazon.com/dp/9781789138054)


## Get to Know the Author
**Adam O'Grady**
hails from the remote Perth, Western Australia, and can usually be found on Twitter at @adamjogrady or in meatspace wrangling with code.

His first taste of programming came from building games into graphics calculators at high school, and quickly developed into a passion. A few years later, while doing social media marketing for an ISP, his first big break arrived; building custom applications to monitor and respond to social feeds.

After that, he spent a few years working for the government building systems that used satellite and geographic data to spot and predict bushfires, and now you can find him leading a small team of engineering mavens at a local health start-up.


### Suggestions and Feedback
[Click here](https://docs.google.com/forms/d/e/1FAIpQLSdy7dATC6QmEL81FIUuymZ0Wy9vH1jHkvpY57OiMeKGqib_Ow/viewform) if you have any feedback or suggestions.


