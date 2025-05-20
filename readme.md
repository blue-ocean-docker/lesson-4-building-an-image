# Blue Ocean Docker — Lesson 4: Building an Image

This repository contains the example shown in [Lesson 4: Building Image](https://www.blueoceandocker.com/lesson/building-an-image).

## Usage

In addition to exploring the files, here are some simple instructions on how to build and use the image.

1. In your terminal, clone this repository to the desired location on your computer: `git clone git@github.com:Blue-Ocean-Docker/lesson-4-building-an-image.git`
2. In your terminal Change Directory to your cloned repository: `cd lesson-4-building-an-image`
3. Run the docker build command `docker build --tag blue-ocean-docker-lesson-4 .`
   - For more information on the `docker build` command, check out the docs https://docs.docker.com/build/
4. Run `docker run -it --rm -p9000:80 blue-ocean-docker-lesson-4` to start the Docker container from the image that you just built
5. Open http://localhost:9000 in your browser. You should see the demo page rendered from `html/index.php`

You have now built and run an image. But you will note that if you make any changes to the files in the repo, they won't be reflected on the site until you build the image again and then run the new image. That's not ideal for web development. But you can mount the codebase into the running container with the `-v` option on the `docker run` command like this:

```shell
docker run -it --rm -p9000:80 -v $(pwd):/var/www blue-ocean-docker-lesson-4
```

`-v` specifies a volume mount. The left side of the `:` specifies the location in your local filesystem, and the right side of the `:` specifies _where_ to mount it in the running container. `pwd` in POSIX shells prints out the current working directory.
